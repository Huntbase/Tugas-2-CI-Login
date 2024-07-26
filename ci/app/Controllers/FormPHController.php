<?php

namespace App\Controllers;

use App\Models\FormPenitipanModel;
use App\Models\PenitipanModel;

class FormPHController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('layanan/FormPHCard')
            . view('layout/footerpettopia');
    }

    public function addForm()
    {
        $formPenitipanModel = new FormPenitipanModel();

        $rules = [
            'nama' => 'required',
            'nomor_hp' => 'required|numeric',
            'nama_hewan' => 'required',
            'spesies_hewan' => 'required',
            'ras_hewan' => 'required',
            'jenis_kelamin_hewan' => 'required',
            'tanggal_lahir_hewan' => 'required',
            'berat_hewan' => 'required|numeric',
            'tanggal_checkin' => 'required',
            'tanggal_checkout' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'nama_hewan' => $this->request->getPost('nama_hewan'),
            'spesies_hewan' => $this->request->getPost('spesies_hewan'),
            'ras_hewan' => $this->request->getPost('ras_hewan'),
            'jenis_kelamin_hewan' => $this->request->getPost('jenis_kelamin_hewan'),
            'tanggal_lahir_hewan' => $this->request->getPost('tanggal_lahir_hewan'),
            'berat_hewan' => $this->request->getPost('berat_hewan'),
            'tanggal_checkin' => $this->request->getPost('tanggal_checkin'),
            'tanggal_checkout' => $this->request->getPost('tanggal_checkout'),
        ];

        // Tambahkan debug log untuk data yang diterima
        log_message('debug', 'Data yang diterima untuk disimpan: ' . json_encode($data));

        if ($formPenitipanModel->save($data)) {
            $insertedId = $formPenitipanModel->getInsertID();
            return redirect()->to('/FormPHController/rincianPenitipanForm/' . $insertedId)->with('success', 'Form added successfully');
        } else {
            // Tambahkan pesan error dari model jika save gagal
            $errors = $formPenitipanModel->errors();
            return redirect()->back()->withInput()->with('error', 'Failed to add form: ' . implode(', ', $errors));
        }
    }
    
    public function rincianPenitipanForm($id)
    {
        $formPenitipanModel = new FormPenitipanModel();
        $PenitipanModel = new PenitipanModel();

        $formSubmission = $formPenitipanModel->find($id);

        if(empty($formSubmission)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Form data with ID ' . $id . ' not found');
        }

        // $data['formpenitipan'] = $formPenitipanModel->find($id);

        $checkin = new \DateTime($formSubmission['tanggal_checkin']);
        $checkout = new \DateTime($formSubmission['tanggal_checkout']);
        $interval = $checkin->diff($checkout);
        $jumlah_hari = $interval->days;


        // Ambil nilai berat hewan dari formulir
        $spesies_hewan = $formSubmission['spesies_hewan'];// $spesies_hewan = $this->request->getPost('spesies_hewan');
        $berat_hewan = $formSubmission['berat_hewan'];// $berat_hewan = $this->request->getPost('berat_hewan');

        // Mengelompokkan hewan berdasarkan spesies dan berat 
        if ($spesies_hewan == 'Kucing') 
        {
            if ($berat_hewan <= 5) {
                $id_harga = 1;
            } elseif ($berat_hewan > 5) {
                $id_harga = 2;
            } else {
                throw new \Exception('No matching category found for the specified weight');
            }
        } elseif ($spesies_hewan == 'Anjing') {
            if ($berat_hewan <= 5) {
                $id_harga = 4;
            } elseif ($berat_hewan > 5 && $berat_hewan <= 15) {
                $id_harga = 5;
            } elseif ($berat_hewan > 15 && $berat_hewan <= 25) {
                $id_harga = 6;
            } elseif ($berat_hewan > 25) {
                $id_harga = 7;
            } else {
                throw new \Exception('No matching category found for the specified weight');
            }
        } else {
            $id_harga = 3;
        }

        // Cari harga berdasarkan id_harga
        $harga = $PenitipanModel->where('id_harga', $id_harga)->first();

        if (!$harga) {
            throw new \Exception('Price not found for the specified category');
        }

        // Perhitungan harga dan total harga
        $price = $harga['harga'] * $jumlah_hari;
        $totalPrice = $price + 5000;

        // Menyimpan data ke masing-masing variabel
        $data['formSubmission'] = $formSubmission;
        $data['jumlah_hari'] = $jumlah_hari;
        $data['price'] = $price;
        $data['totalPrice'] = $totalPrice;

        return 
        view('layout/headerpettopia')    
        . view('/layanan/RincianFormPH', $data);
    }   
}
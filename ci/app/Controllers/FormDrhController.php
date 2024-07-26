<?php

namespace App\Controllers;

use App\Models\FormDokterModel;
use App\Models\DrKesehatanModel;
use App\Models\DrVaksinasiModel;
use App\Models\DrSterilisasiModel;
use App\Models\DrKonsultasiModel;

class FormDrhController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('layanan/FormDrhCard')
            . view('layout/footerpettopia');
    }

    public function addForm()
    {
        $formDokterModel = new FormDokterModel();

        $rules = [
            'nama' => 'required',
            'nomor_hp' => 'required|numeric',
            'nama_hewan' => 'required',
            'spesies_hewan' => 'required',
            'ras_hewan' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir_hewan' => 'required',
            'berat_hewan' => 'required|numeric',
            'jenis_layanan' => 'required',
            'tanggal_booking' => 'required',
            'waktu_booking' => 'required',
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
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir_hewan' => $this->request->getPost('tanggal_lahir_hewan'),
            'berat_hewan' => $this->request->getPost('berat_hewan'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'tanggal_booking' => $this->request->getPost('tanggal_booking'),
            'waktu_booking' => $this->request->getPost('waktu_booking'),
        ];

        // Tambahkan debug log untuk data yang diterima
        log_message('debug', 'Data yang diterima untuk disimpan: ' . json_encode($data));

        if ($formDokterModel->save($data)) {
            $insertedId = $formDokterModel->getInsertID();
            return redirect()->to('/FormDrhController/rincianDokterForm/' . $insertedId)->with('success', 'Form added successfully');
        } else {
            // Tambahkan pesan error dari model jika save gagal
            $errors = $formDokterModel->errors();
            return redirect()->back()->withInput()->with('error', 'Failed to add form: ' . implode(', ', $errors));
        }
    }
    
    public function rincianDokterForm($id)
    {
        $formDokterModel = new FormDokterModel();

        $formSubmission = $formDokterModel->find($id);

        if(empty($formSubmission)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Form data with ID ' . $id . ' not found');
        }

        // $data['formpenitipan'] = $formPenitipanModel->find($id);

        $data['formSubmission'] = $formSubmission;

        return 
        view('layout/headerpettopia')
        . view('/layanan/RincianFormDrh', $data)
        . view('layout/footerpettopia');
    }
}

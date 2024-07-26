<?php

namespace App\Controllers;

use App\Models\FormGroomingModel;
use App\Models\GroomingModel;

class FormGRController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('layanan/FormGrooming')
            . view('layout/footerpettopia');
    }

    public function addForm()
    {
        $formGroomingModel = new FormGroomingModel();

        $rules = [
            'nama' => 'required',
            'nomor_hp' => 'required|numeric',
            'nama_hewan' => 'required',
            'spesies_hewan' => 'required',
            'ras_hewan' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir_hewan' => 'required',
            'berat_hewan' => 'required|numeric',
            'tanggal_booking' => 'required',
            'waktu_booking' => 'required',
            'jenis_grooming' => 'required',
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
            'tanggal_booking' => $this->request->getPost('tanggal_booking'),
            'waktu_booking' => $this->request->getPost('waktu_booking'),
            'jenis_grooming' => $this->request->getPost('jenis_grooming'),
        ];

        // Tambahkan debug log untuk data yang diterima
        log_message('debug', 'Data yang diterima untuk disimpan: ' . json_encode($data));

        if ($formGroomingModel->save($data)) {
            $insertedId = $formGroomingModel->getInsertID();
            return redirect()->to('/FormGRController/rincianGroomingForm/' . $insertedId)->with('success', 'Form added successfully');
        } else {
            // Tambahkan pesan error dari model jika save gagal
            $errors = $formGroomingModel->errors();
            return redirect()->back()->withInput()->with('error', 'Failed to add form: ' . implode(', ', $errors));
        }
    }
    
    public function rincianGroomingForm($id)
    {
        $formGroomingModel = new FormGroomingModel();
        $GroomingModel = new GroomingModel();
        $formSubmission = $formGroomingModel->find($id);

        if(empty($formSubmission)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Form data with ID ' . $id . ' not found');
        }

        $jenis_grooming = $formSubmission['jenis_grooming'];// $spesies_hewan = $this->request->getPost('spesies_hewan');
        $spesies_hewan = $formSubmission['spesies_hewan'];// $berat_hewan = $this->request->getPost('berat_hewan');
        $berat_hewan = $formSubmission['berat_hewan'];// $berat_hewan = $this->request->getPost('berat_hewan');

        // $data['formpenitipan'] = $formPenitipanModel->find($id);
        if ($jenis_grooming == 'Dry Grooming') 
        {
            if ($spesies_hewan == 'Kucing') {
                if ($berat_hewan <= 5) {
                    $id = 1;
                } elseif ($berat_hewan > 5) {
                    $id = 2;
                }
            } elseif ($spesies_hewan == 'Anjing') {
                if ($berat_hewan <= 5) {
                    $id = 3;
                } elseif ($berat_hewan > 5 && $berat_hewan <= 15) {
                    $id = 4;
                } elseif ($berat_hewan > 15 && $berat_hewan <= 25) {
                    $id = 5;
                } elseif ($berat_hewan > 25) {
                    $id = 6;
                }
            }
        } elseif ($jenis_grooming == 'Basic Grooming') {
                if ($spesies_hewan == 'Kucing') {
                    if ($berat_hewan <= 5) {
                        $id = 7;
                    } elseif ($berat_hewan > 5) {
                        $id = 8;
                    }
                } elseif ($spesies_hewan == 'Anjing') {
                    if ($berat_hewan <= 5) {
                        $id = 9;
                    } elseif ($berat_hewan > 5 && $berat_hewan <= 15) {
                        $id = 10;
                    } elseif ($berat_hewan > 15 && $berat_hewan <= 25) {
                        $id = 11;
                    } elseif ($berat_hewan > 25) {
                        $id = 12;
                    }
                } 
        } else {
            if ($spesies_hewan == 'Kucing') {
                if ($berat_hewan <= 5) {
                    $id = 13;
                } elseif ($berat_hewan > 5) {
                    $id = 14;
                }
            } elseif ($spesies_hewan == 'Anjing') {
                if ($berat_hewan <= 5) {
                    $id = 15;
                } elseif ($berat_hewan > 5 && $berat_hewan <= 15) {
                    $id = 16;
                } elseif ($berat_hewan > 15 && $berat_hewan <= 25) {
                    $id = 17;
                } elseif ($berat_hewan > 25) {
                    $id = 18;
                }
            }
        }

        $harga = $GroomingModel->where('id', $id)->first();

        if (!$harga) {
            throw new \Exception('Price not found for the specified category');
        }

        $price = $harga['harga'];
        $totalPrice = $price + 5000;

        // Menyimpan data ke masing-masing variabel
        $data['formSubmission'] = $formSubmission;
        $data['price'] = $price;
        $data['totalPrice'] = $totalPrice;

        return 
            view('layout/headerpettopia')
            . view('/layanan/RincianFormGr', $data);
    }
}
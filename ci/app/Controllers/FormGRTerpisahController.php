<?php

namespace App\Controllers;

use App\Models\FormgrterpisahModel;
use App\Models\GrTerpisahModel;

class FormGRTerpisahController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('layanan/FormGRTerpisah')
            . view('layout/footerpettopia');
    }

    public function addForm()
    {
        $formgrterpisahModel = new FormgrterpisahModel();

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
            'layanan_grooming' => 'required',
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
            'layanan_grooming' => $this->request->getPost('layanan_grooming'),
        ];

        // Tambahkan debug log untuk data yang diterima
        log_message('debug', 'Data yang diterima untuk disimpan: ' . json_encode($data));

        if ($formgrterpisahModel->save($data)) {
            $insertedId = $formgrterpisahModel->getInsertID();
            return redirect()->to('/FormGRTerpisahController/rincianGRTerpisahForm/' . $insertedId)->with('success', 'Form added successfully');
        } else {
            // Tambahkan pesan error dari model jika save gagal
            $errors = $formgrterpisahModel->errors();
            return redirect()->back()->withInput()->with('error', 'Failed to add form: ' . implode(', ', $errors));
        }
    }
    
    public function rincianGRTerpisahForm($id)
    {
        $formgrterpisahModel = new FormgrterpisahModel();
        $GrTerpisahModel = new GrTerpisahModel();
        $formSubmission = $formgrterpisahModel->find($id);

        if(empty($formSubmission)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Form data with ID ' . $id . ' not found');
        }

        $layanan_grooming = $formSubmission['layanan_grooming'];
        $spesies_hewan = $formSubmission['spesies_hewan'];
        $berat_hewan = $formSubmission['berat_hewan'];
        
        if ($layanan_grooming == 'Cukur Lion Cut') 
        {
            if ($spesies_hewan == 'Kucing') {
                if ($berat_hewan <= 5) {
                    $id_harga = 1;
                } elseif ($berat_hewan > 5) {
                    $id_harga = 2;
                }
            } elseif ($spesies_hewan == 'Anjing') {
                if ($berat_hewan <= 5) {
                    $id_harga = 3;
                } elseif ($berat_hewan > 5 && $berat_hewan <= 15) {
                    $id_harga = 4;
                } elseif ($berat_hewan > 15 && $berat_hewan <= 25) {
                    $id_harga = 5;
                } elseif ($berat_hewan > 25) {
                    $id_harga = 6;
                }
            }
        } elseif ($layanan_grooming == 'Cukur Stylish') {
                if ($spesies_hewan == 'Kucing') {
                    if ($berat_hewan <= 5) {
                        $id_harga = 7;
                    } elseif ($berat_hewan > 5) {
                        $id_harga = 8;
                    }
                } elseif ($spesies_hewan == 'Anjing') {
                    if ($berat_hewan <= 5) {
                        $id_harga = 9;
                    } elseif ($berat_hewan > 5 && $berat_hewan <= 15) {
                        $id_harga = 10;
                    } elseif ($berat_hewan > 15 && $berat_hewan <= 25) {
                        $id_harga = 11;
                    } elseif ($berat_hewan > 25) {
                        $id_harga = 12;
                    }
                }
        } elseif ($layanan_grooming == 'Pembersihan Gigi') {
            if ($spesies_hewan == 'Kucing') {
                if ($berat_hewan <= 5) {
                    $id_harga = 13;
                } elseif ($berat_hewan > 5) {
                    $id_harga = 14;
                }
            } elseif ($spesies_hewan == 'Anjing') {
                if ($berat_hewan <= 5) {
                    $id_harga = 15;
                } elseif ($berat_hewan > 5 && $berat_hewan <= 15) {
                    $id_harga = 16;
                } elseif ($berat_hewan > 15 && $berat_hewan <= 25) {
                    $id_harga = 17;
                } elseif ($berat_hewan > 25) {
                    $id_harga = 18;
                }
            }
        } else {
            if ($spesies_hewan == 'Kucing') {
                if ($berat_hewan <= 5) {
                    $id_harga = 19;
                } elseif ($berat_hewan > 5) {
                    $id_harga = 20;
                }
            } elseif ($spesies_hewan == 'Anjing') {
                if ($berat_hewan <= 5) {
                    $id_harga = 21;
                } elseif ($berat_hewan > 5 && $berat_hewan <= 15) {
                    $id_harga = 22;
                } elseif ($berat_hewan > 15 && $berat_hewan <= 25) {
                    $id_harga = 23;
                } elseif ($berat_hewan > 25) {
                    $id_harga = 24;
                }
            }
        }

        $harga = $GrTerpisahModel->where('id_harga', $id_harga)->first();

        if (!$harga) {
            throw new \Exception('Price not found for the specified category');
        }

        $price = $harga['harga'];
        $totalPrice = $price + 5000;

        // Menyimpan data ke masing-masing variabel
        $data['formSubmission'] = $formSubmission;
        $data['price'] = $price;
        $data['totalPrice'] = $totalPrice;

        return view('/layanan/RincianFormGRTerpisah', $data);
    }
}
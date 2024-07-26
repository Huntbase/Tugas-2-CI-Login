<?php

namespace App\Controllers;

use App\Models\FormKonsultasiModel;

class FormKonsultasiController extends BaseController
{
    public function index()
    {
        return 
            view('layout/headerpettopia')
            . view('layanan/FormKonsultasi')
            . view('layout/footerpettopia');
    }

    public function submit()
    {
        $formKonsultasiModel = new FormKonsultasiModel();

        $rules = [
            'nama' => 'required',
            'nomor_hp' => 'required',
            'nama_hewan' => 'required',
            'spesies_hewan' => 'required',
            'ras_hewan' => 'required',
            'jenis_kelamin_hewan' => 'required',
            'tanggal_lahir_hewan' => 'required',
            'berat_hewan' => 'required|numeric',
            'dokter_hewan' => 'required',
            'kondisi_hewan' => 'required',
            'metode_pembayaran' => 'required',
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
            'dokter_hewan' => $this->request->getPost('dokter_hewan'),
            'kondisi_hewan' => $this->request->getPost('kondisi_hewan'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
        ];

        log_message('debug', 'Data yang diterima untuk disimpan: ' . json_encode($data));

        try {
            if ($formKonsultasiModel->insert($data)) {
                return redirect()->to('/DokterController/dr4')->with('success', 'Form berhasil disubmit');
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal menyimpan form');
            }
        } catch (\Exception $e) {
            log_message('error', 'Error submitting form: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan form: ' . $e->getMessage());
        }
    }
}
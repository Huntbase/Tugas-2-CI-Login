<?php

namespace App\Controllers;

use App\Models\DrKesehatanModel;
use App\Models\DrVaksinasiModel;
use App\Models\DrSterilisasiModel;
use App\Models\DrKonsultasiModel;
// use App\Models\KategoriHewan;
use CodeIgniter\Controller;

class DokterController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('layanan/dokter')
            . view('layout/footerpettopia');
    }

    public function dr1(): string
    {
        $drSatuModel = new drKesehatanModel();
        $data['hargadrkesehatan'] = $drSatuModel->findAll();

        return 
            view('layout/headerpettopia')
            . view('layanan/dr1', $data)
            . view('layout/footerpettopia');
    }

    public function dr2(): string
    {
        $drDuaModel = new drVaksinasiModel();
        $data['hargadrvaksinasi'] = $drDuaModel->findAll();

        return 
            view('layout/headerpettopia')
            . view('layanan/dr2', $data)
            . view('layout/footerpettopia');
    }

    public function dr3(): string
    {
        $drTigaModel = new drSterilisasiModel();
        $data['hargadrsterilisasi'] = $drTigaModel->findAll();

        return 
            view('layout/headerpettopia')
            . view('layanan/dr3', $data)
            . view('layout/footerpettopia');
    }

    public function dr4(): string
    {
        $drEmpatModel = new drKonsultasiModel();
        $data['hargadrkonsultasi'] = $drEmpatModel->findAll();

        return 
            view('layout/headerpettopia')
            . view('layanan/dr4', $data)
            . view('layout/footerpettopia');
    }
}
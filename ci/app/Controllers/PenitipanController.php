<?php

namespace App\Controllers;

use App\Models\PenitipanModel;
use App\Models\KategoriHewan;
use CodeIgniter\Controller;

class PenitipanController extends BaseController
{
    public function index()
    {
        $penitipanModel = new PenitipanModel();
        $data['daftarhargapenitipan'] = $penitipanModel->findAll();

        $kategoriHewan = new KategoriHewan();
        $data['kategorihewan'] = $kategoriHewan->findAll();

        return 
            view('layout/headerpettopia')
            . view('/layanan/PenitipanHewan', $data)
            . view('/layout/footerpettopia');
        
    }
}

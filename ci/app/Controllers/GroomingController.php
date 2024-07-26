<?php

namespace App\Controllers;

use App\Models\GroomingModel;
use App\Models\GrTerpisahModel;
use App\Models\KategoriHewan;
use CodeIgniter\Controller;

class GroomingController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('layanan/grooming')
            . view('layout/footerpettopia');
    }

    public function gr1(): string
    {
        $groomingModel = new GroomingModel();
        $data['hargagrooming'] = $groomingModel->findAll();

        $kategoriHewan = new KategoriHewan();
        $data['kategorihewan'] = $kategoriHewan->findAll();

        return 
            view('layout/headerpettopia')
            . view('layanan/drygr', $data)
            . view('layout/footerpettopia');
    }

    public function gr2(): string
    {
        $groomingModel = new GroomingModel();
        $data['hargagrooming'] = $groomingModel->findAll();

        $kategoriHewan = new KategoriHewan();
        $data['kategorihewan'] = $kategoriHewan->findAll();

        return 
            view('layout/headerpettopia')
            . view('layanan/basicgr', $data)
            . view('layout/footerpettopia');
    }

    public function gr3(): string
    {
        $groomingModel = new GroomingModel();
        $data['hargagrooming'] = $groomingModel->findAll();

        $kategoriHewan = new KategoriHewan();
        $data['kategorihewan'] = $kategoriHewan->findAll();

        return 
            view('layout/headerpettopia')
            . view('layanan/grlengkap', $data)
            . view('layout/footerpettopia');
    }

    public function gr4(): string
    {
        $grTerpisahModel = new GrTerpisahModel();
        $data['hargagrterpisah2'] = $grTerpisahModel->findAll();

        $kategoriHewan = new KategoriHewan();
        $data['kategorihewan'] = $kategoriHewan->findAll();

        return 
            view('layout/headerpettopia')
            . view('layanan/grterpisah', $data)
            . view('layout/footerpettopia');
    }
}
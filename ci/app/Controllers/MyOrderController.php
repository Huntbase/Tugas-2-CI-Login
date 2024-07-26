<?php

namespace App\Controllers;

use App\Models\FormPenitipanModel;
use App\Models\FormGroomingModel;
use App\Models\FormgrterpisahModel;
use App\Models\FormDokterModel;

class MyOrderController extends BaseController
{
    public function index(): string
    {
        $formPenitipanModel = new FormPenitipanModel();
        $data['formpenitipan'] = $formPenitipanModel->findAll();

        $formGroomingModel = new FormGroomingModel();
        $data['formgrooming'] = $formGroomingModel->findAll();

        $formgrterpisahModel = new FormgrterpisahModel();
        $data['formgrterpisah'] = $formgrterpisahModel->findAll();

        $formDokterModel = new FormDokterModel();
        $data['formdokter'] = $formDokterModel->findAll();
        
        return 
            view('layout/headerpettopia')
            . view('myorder/myorder', $data)
            . view('layout/footerpettopia');
    }

    public function rincianph($id = null)
    {
        $formPenitipanModel = new FormPenitipanModel();
        $data['formpenitipan'] = $formPenitipanModel->find($id);
        if (empty($data['formpenitipan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan: ' . $id);
        }
        
        return 
            view('layout/headerpettopia')
            . view('myorder/rincianpenitipan', $data)
            . view('layout/footerpettopia');
    }

    public function rinciangr($id = null)
    {
        $formGroomingModel = new FormGroomingModel();
        $data['formgrooming'] = $formGroomingModel->find($id);
        if (empty($data['formgrooming'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan: ' . $id);
        }
        
        return 
            view('layout/headerpettopia')
            . view('myorder/rinciangrooming', $data)
            . view('layout/footerpettopia');
    }

    public function rinciangrterpisah($id = null)
    {
        $formgrterpisahModel = new FormgrterpisahModel();
        $data['formgrterpisah'] = $formgrterpisahModel->find($id);
        if (empty($data['formgrterpisah'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan: ' . $id);
        }
        
        return 
            view('layout/headerpettopia')
            . view('myorder/rinciangrterpisah', $data)
            . view('layout/footerpettopia');
    }

    public function rinciandr($id = null)
    {
        $formDokterModel = new FormDokterModel();
        $data['formdokter'] = $formDokterModel->find($id);
        if (empty($data['formdokter'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan: ' . $id);
        }
        
        return 
            view('layout/headerpettopia')
            . view('myorder/rinciandokter', $data)
            . view('layout/footerpettopia');
    }
}

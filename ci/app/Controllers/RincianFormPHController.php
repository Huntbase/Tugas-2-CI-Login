<?php

namespace App\Controllers;

class RincianFormPHController extends BaseController
{
    public function index(): string
    {
        return 
            view('layout/headerpettopia')
            . view('layanan/RincianFormPH')
            . view('layout/footerpettopia');
    }

    public function showAddPenitipanForm()
    {
        $formPenitipanModel = new FormPenitipanModel();
        $data['formpenitipan'] = $formPenitipanModel->findAll();
        return view('addForm', $data);
    }
}
<?php

namespace App\Controllers;

class DataProduk extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Produk'
        ];

        echo view('layout/header');
        echo view('content/dataprodukview', $data);
        echo view('layout/footer');
    }
}

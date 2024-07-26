<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class MahasiswaBaru extends BaseController
{
    protected $db_mhs;

    public function __construct()
    {
        $this->db_mhs = new MahasiswaModel();
    }

    public function index()
    {
        $getData = $this->db_mhs->findAll();

        $data = [
            'data' => $getData
        ];

        if (!empty($data)) {

            return view('layout/header')
                . view('content/data_mhsbaru', $data)
                . view('layout/footer');
        } else {
            echo "Data Tidak Ada";
        }
    }
}
<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data['all_data'] = [
            [
                'name' => 'Melani Faliana',
                'donate' => 100000
            ],
            [
                'name' => 'Thania Aprillia',
                'donate' => 50000
            ],
            [
                'name' => 'Irene Maulani',
                'donate' => 30000
            ]
        ];

        return view('layout/header')
            . view('content/data_mahasiswa', $data)
            . view('layout/footer');
    }
}
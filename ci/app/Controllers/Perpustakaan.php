<?php

namespace App\Controllers;

class Perpustakaan extends BaseController
{
    public function index()
    {
        $data['all_data'] = [
            [
                'Judul' => 'Hah?',
                'Pengarang' => 'Melani',
                'Total_halaman' => '150',
                'Tahun_terbit' => '2023'
            ],
            [
                'Judul' => 'Apaan Tuh!?',
                'Pengarang' => 'Thania',
                'Total_halaman' => '170',
                'Tahun_terbit' => '2023'
            ],
            [
                'Judul' => 'Bingung Banget!',
                'Pengarang' => 'Irene',
                'Total_halaman' => '130',
                'Tahun_terbit' => '2023'
            ]
        ];

        if($data['all_data'] != NULL)
            {
                return view('layout/header')
                . view('content/data_perpustakaan', $data)
                . view('layout/footer');
            } else {
                echo "Data Tidak Ada";
            }
    }
}
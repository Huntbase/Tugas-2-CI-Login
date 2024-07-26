<?php

namespace App\Controllers;

use App\Models\PerpusModel;

class TambahData extends BaseController
{

    protected $db_perpus;

    public function __construct()
    {
        $this->db_perpus = new PerpusModel();
    }
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('content/tambah_data_perpus', $data);
    }

    public function proses_add_data()
    {
        $rules =
            [
                'judul' => [
                    'rules' => 'required|is_unique[perpus.judul]',
                    'errors' => [
                        'required' => 'Judul wajib diisi.',
                        'is_unique' => 'Judul sudah terdaftar'
                    ]
                ],
                'pengarang' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama pengarang wajib diisi.'
                    ]
                ],
                'total_halaman' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Total halaman wajib diisi.'
                    ]
                ],
                'tahun_terbit' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tahun terbit wajib diisi.'
                    ]
                ],

            ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->to(base_url('/Tambah_data'));
        }
        //Menambah Data
        $this->db_perpus->insert([
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'total_halaman' => $this->request->getVar('total_halaman'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
        ]);

        //Mengembalikan tampilan ke halaman /perpus setelah input data
        return redirect()->to(base_url('/Perpus'));
    }
}

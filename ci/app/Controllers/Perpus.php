<?php

namespace App\Controllers;

use App\Models\PerpusModel;

class Perpus extends BaseController
{
    protected $db_perpus;

    public function __construct()
    {
        $this->db_perpus = new PerpusModel();
    }

    public function index()
    {
        $getData = $this->db_perpus->findAll();

        $data = [
            'data' => $getData
        ];

        if (!empty($data)) {

            return view('layout/header')
                . view('content/data_perpus', $data)
                . view('layout/footer');
        } else {
            echo "Data Tidak Ada";
        }
    }

    public function proses_delete_data($id)
    {
        $this->db_perpus->delete($id);

        return redirect()->to(base_url("/Perpus"));
    }

    public function edit($id)
    {
        // melakukan fungsi edit berdasarkan id yang dipilih
        $getData = $this->db_perpus->where(['id' => $id])->first(); // untuk menampilkan data yang hanya dipilih melalui id

        $data = [
            'data' => array($getData)
        ];

        return
            view('layout/header')
            . view('content/edit_data_perpus', $data)
            . view('layout/footer');
    }

    public function proses_update($id)
    {
        $this->db_perpus->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'total_halaman' => $this->request->getVar('total_halaman'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
        ]);

        return redirect()->to(base_url("/Perpus"));
    }
}
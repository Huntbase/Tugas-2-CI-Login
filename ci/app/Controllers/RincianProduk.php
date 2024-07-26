<?php

namespace App\Controllers;

use App\Models\RincianProdukModel;

class RincianProduk extends BaseController
{
    protected $pettopia;

    public function __construct()
    {
        $this->pettopia = new RincianProdukModel();
    }
    public function index()
    {
        $getData = $this->pettopia->findAll();

        $data = [
            'data' => $getData
        ];

        if (!empty($data)) {

            return view('layout/header')
                . view('content/data_rincian_produk', $data)
                . view('layout/footer');
        } else {
            echo "data tidak ada";
        }
    }

    public function proses_delete_data($id)
    {
        $this->pettopia->delete($id);

        return redirect()->to(base_url("/RincianProduk"));
    }

    public function edit($id)
    {
        //Melakukan fungsi edit berdasarkan id yang dipilih
        $getData = $this->pettopia->where(['id' => $id])->first(); //Untuk menampilkan data yang hanya dipilih melalui id

        $data = [
            'data' => array($getData)
        ];

        return
            view('layout/header')
            . view('content/edit_rincian_produk', $data)
            . view('layout/footer');
    }
    public function proses_update($id)
    {
        $this->pettopia->save([
            'id' => $id,
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'berat' => $this->request->getVar('berat'),
            'exp_date' => $this->request->getVar('exp_date'),
        ]);

        return redirect()->to(base_url("/RincianProduk"));
    }
}

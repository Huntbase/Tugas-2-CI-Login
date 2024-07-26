<?php

namespace App\Models;

use CodeIgniter\Model;

class RincianProdukModel extends Model
{
    protected $table = 'tb_makanan_kucing';
    protected $primaryKey = 'id';
    // allowedFields berfungsi untuk membatasi kolom yang diizinkan untuk melakukan insert atau update data
    protected $allowedFields = ['nama_produk', 'harga', 'berat', 'exp_date'];
}
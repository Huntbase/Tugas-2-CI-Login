<?php

namespace App\Models;

use CodeIgniter\Model;

class DrVaksinasiModel extends Model
{
    protected $table = 'hargadrvaksinasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jenis_vaksin', 'rentang_usia', 'harga', 'kategori_binatang_id'];
}
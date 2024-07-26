<?php

namespace App\Models;

use CodeIgniter\Model;

class PenitipanModel extends Model
{
    protected $table = 'daftarhargapenitipan';
    protected $primaryKey = 'id_harga';
    // allowedFields : untuk membatasi kolom yang diizinkan untuk melakukan insert atau update data
    protected $allowedFields = ['berat', 'harga', 'kategori_hewan_id'];
}
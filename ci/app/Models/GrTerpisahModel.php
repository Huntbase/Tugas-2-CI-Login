<?php

namespace App\Models;

use CodeIgniter\Model;

class GrTerpisahModel extends Model
{
    protected $table = 'hargagrterpisah2';
    protected $primaryKey = 'id_harga';
    // allowedFields : untuk membatasi kolom yang diizinkan untuk melakukan insert atau update data
    protected $allowedFields = ['layanan_grooming', 'berat', 'harga', 'kategori_binatang_id'];
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class DrKesehatanModel extends Model
{
    protected $table = 'hargadrkesehatan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jenis_tindakan', 'kurang_5_kg_kucing', 'lebih_5_kg_kucing', 'kurang_5_kg_anjing', '5_15_kg_anjing', '15_25_anjing', 'lebih_25_anjing'];
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class DrKonsultasiModel extends Model
{
    protected $table = 'hargadrkonsultasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['harga', 'harga_per_15_menit'];
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class DrSterilisasiModel extends Model
{
    protected $table = 'hargadrsterilisasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jenis_hewan', 'jantan', 'betina', 'kategori_hewan_id'];
}
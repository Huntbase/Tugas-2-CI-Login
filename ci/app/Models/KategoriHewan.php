<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriHewan extends Model
{
    protected $table = 'kategorihewan';
    protected $primaryKey = 'kategori_hewan_id';
    protected $allowedFields = ['spesies_hewan'];
}
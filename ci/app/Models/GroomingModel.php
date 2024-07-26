<?php

namespace App\Models;

use CodeIgniter\Model;

class GroomingModel extends Model
{
    protected $table = 'hargagrooming';
    protected $primaryKey = 'id_harga';
    protected $allowedFields = ['kategori_grooming', 'berat', 'harga', 'kategori_hewan_id'];
}
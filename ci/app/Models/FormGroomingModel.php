<?php

namespace App\Models;

use CodeIgniter\Model;

class FormGroomingModel extends Model
{
    protected $table = 'formgrooming';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nomor_hp', 'nama_hewan', 'spesies_hewan', 'ras_hewan', 'jenis_kelamin', 'tanggal_lahir_hewan', 'berat_hewan', 'tanggal_booking', 'waktu_booking', 'jenis_grooming'];
}
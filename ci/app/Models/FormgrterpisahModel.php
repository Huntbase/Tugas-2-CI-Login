<?php

namespace App\Models;

use CodeIgniter\Model;

class FormgrterpisahModel extends Model
{
    protected $table = 'formgrterpisah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nomor_hp', 'nama_hewan', 'spesies_hewan', 'ras_hewan', 'jenis_kelamin', 'tanggal_lahir_hewan', 'berat_hewan', 'tanggal_booking', 'waktu_booking', 'layanan_grooming'];
}
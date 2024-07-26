<?php

namespace App\Models;

use CodeIgniter\Model;

class FormDokterModel extends Model
{
    protected $table = 'formdokter';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nomor_hp', 'nama_hewan', 'spesies_hewan', 'ras_hewan', 'jenis_kelamin', 'tanggal_lahir_hewan', 'berat_hewan', 'jenis_layanan', 'tanggal_booking', 'waktu_booking'];
}
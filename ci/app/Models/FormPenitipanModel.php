<?php

namespace App\Models;

use CodeIgniter\Model;

class FormPenitipanModel extends Model
{
    protected $table = 'formpenitipan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nomor_hp', 'nama_hewan', 'spesies_hewan', 'ras_hewan', 'jenis_kelamin_hewan', 'tanggal_lahir_hewan', 'berat_hewan', 'tanggal_checkin', 'tanggal_checkout'];
}
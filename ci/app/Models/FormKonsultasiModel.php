<?php

namespace App\Models;

use CodeIgniter\Model;

class FormKonsultasiModel extends Model
{
    protected $table = 'tb_konsultasi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'nomor_hp', 'nama_hewan', 'spesies_hewan', 'ras_hewan',
        'jenis_kelamin_hewan', 'tanggal_lahir_hewan', 'berat_hewan',
        'dokter_hewan', 'kondisi_hewan', 'metode_pembayaran'
    ];
}
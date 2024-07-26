<?php 

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'data_mhs';
    protected $primaryKey = 'npm';
    // allowedFields : untuk membatasi kolom yang diizinkan untuk melakukan insert atau update data
    protected $allowedFields = ['npm', 'nama', 'program_studi', 'semester'];
}
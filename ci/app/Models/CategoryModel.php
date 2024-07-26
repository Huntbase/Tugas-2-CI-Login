<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories'; //deklarasi tabel
    protected $primaryKey = 'id';
    protected $allowedFields = ['name']; //field dalam tabel selain PK
}
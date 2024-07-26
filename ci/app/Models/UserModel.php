<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected  $table = 'users';
    protected  $primarykey = 'id';
    protected  $allowedFields = ['username', 'password', 'name', 'email', 'photo', 'role', 'reset_token'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiUserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email'];
}

<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'useraccount';
    protected $primarykey = 'id';
    protected $allowedFields = ['username','email','password','created_at'];
}
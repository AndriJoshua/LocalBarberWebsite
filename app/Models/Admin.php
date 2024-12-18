<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $table = 'admins'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['username', 'password']; // Kolom yang dapat diisi
    protected $useTimestamps = true; // Aktifkan created_at dan updated_at
}

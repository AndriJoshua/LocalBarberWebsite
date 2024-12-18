<?php

namespace App\Controllers;

use App\Models\Admin;
use CodeIgniter\RESTful\ResourceController;

class AdminController extends ResourceController
{
    protected $modelName = 'App\Models\Admin';
    protected $format    = 'json';

    /**
     * Create a new admin.
     */
    public function create()
{
    $data = $this->request->getJSON(true);

    if (!$data || empty($data['username']) || empty($data['password'])) {
        return $this->failValidationErrors(['message' => 'Username and password are required']);
    }

    // Validasi input
    $rules = [
        'username' => 'required|is_unique[admins.username]|alpha_dash',
        'password' => 'required|min_length[6]',
    ];

    if (!$this->validate($rules)) {
        return $this->failValidationErrors($this->validator->getErrors());
    }

    // Hash password
    $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

    // Simpan data ke database
    if ($this->model->insert($data)) {
        return $this->respondCreated(['message' => 'Admin created successfully']);
    }

    return $this->failServerError('Failed to create admin');
}

    
}

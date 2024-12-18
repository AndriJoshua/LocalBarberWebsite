<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

class TestApiAuth extends ResourceController
{
    protected $format = 'json';

    /**
     * Method untuk menangani registrasi user melalui API
     */
    public function register()
    {
        $userModel = new UserModel();

        // Mengambil data input JSON
        $input = $this->request->getJSON(true);

        // Validasi data input
        $validation = \Config\Services::validation();
        $rules = [
            'username' => [
                'rules' => 'required|min_length[3]|max_length[50]|is_unique[useraccount.username]',
                'errors' => [
                    'required'   => 'Kolom username harus diisi.',
                    'min_length' => 'Username harus terdiri dari minimal 3 karakter.',
                    'max_length' => 'Username tidak boleh lebih dari 50 karakter.',
                    'is_unique'  => 'Username sudah digunakan. Silakan pilih username lain.',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[useraccount.email]',
                'errors' => [
                    'required'    => 'Kolom email harus diisi.',
                    'valid_email' => 'Format email tidak valid.',
                    'is_unique'   => 'Email sudah terdaftar. Silakan gunakan email lain.',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required'   => 'Kolom password harus diisi.',
                    'min_length' => 'Password harus memiliki minimal 8 karakter.',
                ],
            ],
        ];

        if (!$validation->setRules($rules)->run($input)) {
            // Mengembalikan error validasi dalam format JSON
            return $this->failValidationErrors($validation->getErrors());
        }

        // Data valid, simpan ke database
        $data = [
            'username' => $input['username'],
            'email'    => $input['email'],
            'password' => password_hash($input['password'], PASSWORD_BCRYPT), // Hashing password
            'created_at' => date('Y-m-d H:i:s'), // Tambahkan waktu pembuatan akun
        ];

        try {
            $userModel->insert($data);
        } catch (\Exception $e) {
            // Tangani error saat menyimpan ke database
            return $this->failServerError('Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }

        // Kembalikan respons sukses
        return $this->respondCreated([
            'status' => 201,
            'message' => 'Registrasi berhasil.',
            'data' => [
                'username' => $data['username'],
                'email' => $data['email']
            ],
        ]);
    }


    public function loginuser()
    {
        $userModel = new UserModel();
        $input = $this->request->getJSON(true);
    
        $validation = \Config\Services::validation();
        $rules = [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required'    => 'Kolom email harus diisi.',
                    'valid_email' => 'Format email tidak valid.',
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom password harus diisi.',
                ],
            ],
        ];
    
        if (!$validation->setRules($rules)->run($input)) {
            return $this->failValidationErrors($validation->getErrors());
        }
    
        $email = $input['email'];
        $password = $input['password'];
        $user = $userModel->where('email', $email)->first();
    
        if (!$user || !password_verify($password, $user['password'])) {
            return $this->failUnauthorized('Email atau password salah.');
        }
    
        // Buatkan token
        $userData = [
            'user_id'    => $user['id'],
            'username'   => $user['username'],
            'email'      => $user['email'],
            'photo'      => $user['photo'],
            'logged_in'  => true,
        ];
        $token = base64_encode(json_encode($userData)); // Contoh encoding sederhana
    
        return $this->respond([
            'status'  => 200,
            'message' => 'Login berhasil.',
            'data'    => $userData,
            'token'   => $token,
        ]);
    }
    
}

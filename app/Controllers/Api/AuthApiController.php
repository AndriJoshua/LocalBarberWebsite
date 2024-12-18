<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthApiController extends BaseController
{
    public function register()
    {
        $userModel = new UserModel();

        // Validasi input
        $data = $this->request->getJSON(true); // Mendapatkan data dari request body
        if (!$this->validate([
            'username' => 'required|min_length[3]|max_length[50]|is_unique[useraccount.username]',
            'email'    => 'required|valid_email|is_unique[useraccount.email]',
            'password' => 'required|min_length[8]',
        ])) {
            return $this->response->setJSON([
                'status'  => ResponseInterface::HTTP_BAD_REQUEST,
                'message' => 'Validation failed',
                'errors'  => $this->validator->getErrors(),
            ]);
        }

        // Simpan data ke database
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        if ($userModel->insert($data)) {
            return $this->response->setJSON([
                'status'  => ResponseInterface::HTTP_CREATED,
                'message' => 'User registered successfully',
            ]);
        }

        return $this->response->setJSON([
            'status'  => ResponseInterface::HTTP_INTERNAL_SERVER_ERROR,
            'message' => 'Failed to register user',
        ]);
    }

    public function login()
    {
        $userModel = new UserModel();

        // Validasi input
        $data = $this->request->getJSON(true);
        if (!$this->validate([
            'email' => 'required|valid_email',
            'password' => 'required',
        ])) {
            return $this->response->setJSON([
                'status'  => ResponseInterface::HTTP_BAD_REQUEST,
                'message' => 'Validation failed',
                'errors'  => $this->validator->getErrors(),
            ]);
        }

        // Cari user
        $user = $userModel->where('email', $data['email'])->first();
        if (!$user || !password_verify($data['password'], $user['password'])) {
            return $this->response->setJSON([
                'status'  => ResponseInterface::HTTP_UNAUTHORIZED,
                'message' => 'Invalid email or password',
            ]);
        }

        // Buat token sederhana
        $token = base64_encode(json_encode([
            'user_id'   => $user['id'],
            'username'  => $user['username'],
            'email'     => $user['email'],
        ]));

        return $this->response->setJSON([
            'status'  => ResponseInterface::HTTP_OK,
            'message' => 'Login successful',
            'data'    => [
                'token' => $token,
                'user'  => $user,
            ],
        ]);
    }
}

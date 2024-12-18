<?php

namespace App\Controllers;

use App\Models\ApiUserModel;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    public function tampil()
    {
        return view('Users');
    }

    protected $modelName = 'App\Models\ApiUserModel';
    protected $format    = 'json';

    // GET /users
    public function index()
    {
        $users = $this->model->findAll();
        return $this->respond($users);
    }

    // POST /users
    public function create()
    {
        // Ambil data dari request (JSON atau POST)
        $data = $this->request->getJSON(true) ?? $this->request->getPost();

        // Validasi data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'  => 'required|min_length[3]',
            'email' => 'required|valid_email',
        ]);

        if (!$validation->run($data)) {
            // Jika validasi gagal, kembalikan error
            return $this->failValidationErrors($validation->getErrors());
        }

        // Insert data ke database
        $insertedId = $this->model->insert($data);

        // Cek apakah data berhasil dimasukkan
        if ($insertedId) {
            // Jika berhasil, kembalikan respon sukses beserta ID
            return $this->respondCreated([
                'status' => 201,
                'message' => 'User created successfully',
                'data' => [
                    'id' => $insertedId,
                    'name' => $data['name'],
                    'email' => $data['email']
                ]
            ]);
        }

        // Jika gagal memasukkan data
        return $this->fail('Failed to create user. Please try again.');
    }





    // GET /users/{id}
    public function show($id = null)
    {
        $user = $this->model->find($id);
        if ($user) {
            return $this->respond($user);
        }

        return $this->failNotFound('User not found');
    }

    // PUT /users/{id}
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        if ($this->model->update($id, $data)) {
            return $this->respond(['status' => 'User updated successfully']);
        }

        return $this->failNotFound('User not found');
    }

    // DELETE /users/{id}
    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['status' => 'User deleted successfully']);
        }

        return $this->failNotFound('User not found');
    }
}

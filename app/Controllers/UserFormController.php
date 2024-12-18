<?php

namespace App\Controllers;

use App\Models\ApiUserModel;

class UserFormController extends BaseController
{
    public function index()
    {
        // Tampilkan view form
        return view('user_form');
    }

    public function save()
    {
        $model = new ApiUserModel();

        // Ambil data dari POST
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        // Validasi sederhana
        if (!$data['name'] || !$data['email']) {
            return redirect()->back()->with('error', 'Name and Email are required.');
        }

        // Simpan ke database
        if ($model->insert($data)) {
            return redirect()->back()->with('success', 'User created successfully.');
        }

        return redirect()->back()->with('error', 'Failed to save user.');
    }
}

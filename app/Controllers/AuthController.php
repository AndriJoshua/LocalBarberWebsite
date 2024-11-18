<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;

class AuthController extends Controller{
    public function storeuser()
    {
        $userModel = new UserModel();

        // Validasi input
        $validation = \Config\Services::validation();
        if (!$this->validate([
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
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Data valid, coba simpan ke database
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        ];

        try {
            $userModel->insert($data);
        } catch (DatabaseException $e) {
            // Tangkap error duplicate entry
            if ($e->getCode() == 1062) { // MySQL error code for duplicate entry
                return redirect()->back()->withInput()->with('error', 'Username atau Email sudah terdaftar.');
            }
            // Error lain, tampilkan pesan umum
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }

        // Redirect ke halaman sukses
        return redirect()->to('/register')->with('success', 'Registrasi akun berhasil.');
    }
}
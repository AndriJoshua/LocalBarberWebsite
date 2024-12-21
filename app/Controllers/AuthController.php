<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;

class AuthController extends Controller
{
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
            return redirect()->to(base_url('register'))->withInput()->with('errors', $this->validator->getErrors());
        }

        // Data valid mencoba disimpan ke database
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
                return redirect()->to('http://localhost:8080/register')->withInput()->with('error', 'Username atau Email sudah terdaftar.');
            }
            // Error lain, tampilkan pesan umum
            return redirect()->to('http://localhost:8080/register')->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }

        // Redirect ke halaman sukses
        return redirect()->to(base_url('register'))->with('success', 'Registrasi akun berhasil.');
    }

    public function loginuser()
    {
        $userModel = new UserModel();
        
        // Validasi input
        if (!$this->validate([
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
        ])) {
            return redirect()->to(base_url('booking'))->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data input
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari pengguna berdasarkan email
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            // Jika email tidak ditemukan
            return redirect()->to(base_url('booking'))->withInput()->with('error', 'Email atau password salah.');
        }

        // Verifikasi password
        if (!password_verify($password, $user['password'])) {
            // Jika password tidak cocok
            return redirect()->to(base_url('booking'))->withInput()->with('error', 'Email atau password salah.');
        }

        // Set sesi pengguna
        
        session()->set([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'foto_user' => $user['photo'],
            'user_email' => $user['email'],
            'logged_in' => true,
        ]);
        

        // Redirect ke halaman dashboard atau halaman lain
        return redirect()->to(base_url('dashboard_user'))->with('success', 'Login berhasil.');
    }

    public function dashboard_user()
    {
        // Periksa apakah pengguna sudah login dengan menggunakan sesi yang dikelola oleh CodeIgniter
        if (!session()->get('logged_in')) {
            // Jika tidak ada sesi 'logged_in', arahkan ke halaman login
            return redirect()->to(base_url('booking'));
        }

        // Jika sudah login, tampilkan halaman dashboard
        return view('dashboard_user');
    }

    public function logout()
    {
        // Menghapus semua data sesi
        session()->remove(['user_id', 'username', 'logged_in']);

        session()->destroy();

        // Redirect ke halaman login setelah logout
        return redirect()->to('http://localhost:8080/booking');
    }

}

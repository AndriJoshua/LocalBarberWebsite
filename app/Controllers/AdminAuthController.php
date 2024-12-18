<?php

namespace App\Controllers;

use App\Models\Admin;
use CodeIgniter\Controller;

class AdminAuthController extends Controller
{
    public function login()
    {
        // Jika admin sudah login, redirect ke dashboard
        if (session()->get('is_admin_logged_in')) {
            return redirect()->to('/admin/dashboard');
        }

        return view('adminlogin');
    }

    public function processLogin()
    {
        $adminModel = new Admin();

        // Ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari admin berdasarkan username
        $admin = $adminModel->where('username', $username)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            // Simpan sesi admin
            session()->set([
                'admin_id' => $admin['id'],
                'admin_username' => $admin['username'],
                'is_admin_logged_in' => true,
            ]);

            return redirect()->to('/admin/dashboard');
        }

        // Jika login gagal
        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        // Hapus semua sesi
        session()->remove(['username', 'logged_in']);
        session()->destroy();
        return redirect()->to(base_url('admin_login'));
    }
}

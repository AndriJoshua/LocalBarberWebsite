<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Ini hanya contoh sederhana, gunakan model dan database untuk validasi yang sebenarnya
        if ($username == 'admin' && $password == 'admin') {
            $session->set('user', $username);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Invalid Username or Password');
            return redirect()->back();
        }
    }
}

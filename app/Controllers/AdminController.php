<?php

namespace App\Controllers;

use App\Models\Admin;
use CodeIgniter\RESTful\ResourceController;
use App\Models\ReservationModel;
class AdminController extends ResourceController
{
    protected $modelName = 'App\Models\Admin';
    protected $format    = 'json';


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

    public function dashboard()
    {
        // Hanya admin yang login dapat mengakses
        if (!session()->get('is_admin_logged_in')) {
            return redirect()->to('/admin/login');
        }

        return view('admin/dashboard');
    }

    public function apiReservations()
    {
        $reservationModel = new ReservationModel();
        $reservations = $reservationModel->findAll();
        return $this->response->setJSON($reservations);
    }

    public function deleteReservation($id)
    {
        $reservationModel = new ReservationModel();
        if ($reservationModel->delete($id)) {
            return $this->response->setJSON(['message' => 'Reservation deleted successfully']);
        }
        return $this->response->setJSON(['error' => 'Failed to delete reservation'], 500);
    }
}

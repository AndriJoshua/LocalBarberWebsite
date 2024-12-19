<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ReservationApi extends ResourceController
{
    protected $modelName = 'App\Models\ReservationModel';
    protected $format    = 'json';

    // MEngambil reservasi berdasarkan email yang sedang login di akun
    public function index()
    {
        $email = session()->get('user_email'); 
        if (!$email) {
            return $this->failUnauthorized('Anda harus login untuk melihat data reservasi.');
        }

        $reservations = $this->model->where('email', $email)->findAll();
        return $this->respond($reservations);
    }

    // Membuat reservasi baru
    public function create()
    {
        $email = session()->get('user_email'); 
        if (!$email) {
            return $this->failUnauthorized('Anda harus login untuk membuat reservasi.');
        }

        $data = $this->request->getPost();
        $data['email'] = $email; 

        if (!$this->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'date' => 'required|valid_date[Y-m-d]',
            'time' => 'required',
        ])) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $id = $this->model->insert($data);
        return $this->respondCreated(['id' => $id, 'message' => 'Reservasi berhasil dibuat']);
    }

    // update reservasi di halaman user
    public function update($id = null)
    {
        $email = session()->get('user_email'); // Email from session
        if (!$email) {
            return $this->failUnauthorized('Anda harus login untuk mengedit reservasi.');
        }

        $reservation = $this->model->find($id);
        if (!$reservation || $reservation['email'] !== $email) {
            return $this->failNotFound('Reservasi tidak ditemukan.');
        }

        $data = $this->request->getRawInput();

        if (!$this->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'date' => 'required|valid_date[Y-m-d]',
            'time' => 'required',
        ])) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $this->model->update($id, $data);
        return $this->respond(['message' => 'Reservasi berhasil diperbarui']);
    }

    //mengahpus reservasi di halaman reservasi user
    public function delete($id = null)
    {
        $email = session()->get('user_email'); 
        if (!$email) {
            return $this->failUnauthorized('Anda harus login untuk menghapus reservasi.');
        }

        $reservation = $this->model->find($id);
        if (!$reservation || $reservation['email'] !== $email) {
            return $this->failNotFound('Reservasi tidak ditemukan.');
        }

        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Reservasi berhasil dihapus']);
    }

    public function crudView()
    {
        return view('reservation_crud');
    }
}

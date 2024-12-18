<?php

namespace App\Controllers;

use App\Models\ReservationModel;

class ReservationController extends BaseController
{
    public function store()
    {
        $reservationModel = new ReservationModel();
    
        // Validasi input
        if (!$this->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'date' => 'required|valid_date[Y-m-d]',
            'time' => 'required',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    
        // Ambil email dari session
        $email = session()->get('user_email');
    
        // Simpan data ke database
        $reservationModel->save([
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'date' => $this->request->getPost('date'),
            'time' => $this->request->getPost('time'),
            'email' => $email,
        ]);
    
        // Set flashdata untuk notifikasi
        session()->setFlashdata('success', 'Reservasi berhasil dibuat!');
    
        // Redirect kembali ke halaman form
        return redirect()->to(base_url('dashboard_user'));
    }
    
    public function sessionReservation()
{
    // Ambil data reservasi dari session
    $reservation = session()->get('reservation');

    // Kirim data ke view
    return view('reservation_session', ['reservation' => $reservation]);
}

public function userReservations()
{
    $reservationModel = new \App\Models\ReservationModel();

    // Ambil email dari session pengguna yang sedang login
    $email = session()->get('user_email');

    // Ambil semua reservasi berdasarkan email
    $reservations = $reservationModel->where('email', $email)->findAll();

    // Kirim data ke view
    return view('reservasi_user', ['reservations' => $reservations]);
}

}

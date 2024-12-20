<?php

namespace App\Controllers;

use App\Models\UserModel;

class ProfileUpdate extends BaseController{
    public function UpdateUsername(){
        $usernamebaru = $this->request->getPost('username');
        $session = session();

        if (!$session->get('logged_in')){
            return redirect()->to(base_url('booking'))->with('error','Anda harus login terlebih dahulu');
        }

        if(empty($usernamebaru)){
            return redirect()->to(base_url('booking'))->with('error','Username tidak boleh kosong');

        }
        $userId = $session->get('user_id');

        $model = new UserModel();
        $updated = $model->update($userId,['username'=>$usernamebaru]);

        if($updated){
            $session->set('username',$usernamebaru);
            return redirect()->to(base_url('profile'))->with('message','Sukses mengganti username!!');
        }
        else{
            return redirect()->to(base_url('profile'))->with('error','gagal mengganti username!');
        }

    }
    public function updatePhoto()
    {
        $session = session();
    
        // Cek apakah pengguna login
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url('login'))->with('error', 'Anda harus login terlebih dahulu.');
        }
    
        // Ambil ID pengguna dari sesi
        $userId = $session->get('user_id');
    
        // Ambil file dari form
        $file = $this->request->getFile('photo');
    
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Direktori penyimpanan
            $uploadPath = ROOTPATH . 'public/uploads/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
    
            $model = new UserModel();
            $user = $model->find($userId);
    
            // Ambil path foto lama atau buat path default
            $oldPhotoPath = $user['photo'] ?? 'uploads/' . $userId . '_profile.jpg';
            $fullPhotoPath = ROOTPATH . 'public/' . $oldPhotoPath;
    
            // Hapus file lama jika ada
            if (file_exists($fullPhotoPath)) {
                unlink($fullPhotoPath);
            }
    
            // Simpan file baru di path yang sama
            $file->move(dirname($fullPhotoPath), basename($fullPhotoPath));
    
            // Simpan path (jika tidak ada sebelumnya) ke database
            if (empty($user['photo'])) {
                $model->update($userId, ['photo' => $oldPhotoPath]);
            }
    
            // Perbarui sesi
            $session->set('photo', $oldPhotoPath);
    
            return redirect()->to(base_url('profile'))->with('message', 'Foto berhasil diperbarui.');
        }
    
        return redirect()->to(base_url('profile'))->with('error', 'Gagal mengunggah foto.');
    }
    
}
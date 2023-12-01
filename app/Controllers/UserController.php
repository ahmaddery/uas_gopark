<?php

namespace App\Controllers;

use App\Models\UserCrud;
use CodeIgniter\Controller;

class UserController extends Controller
{
    protected $session;

    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        $model = new UserCrud();
        $data['users'] = $model->getUsers();

        return view('pages/user', $data);
    }

    public function update($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        $model = new UserCrud();

        // Mengambil data user berdasarkan ID
        $user = $model->getUser($id);

        // Mengirim data user ke view update_user
        return view('pages/update_user', ['user' => $user]);
    }

    public function processUpdate($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        $model = new UserCrud();

        // Mengambil data user yang diupdate dari form
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email')
        ];

        // Memperbarui data user dalam database
        $model->updateUser($id, $data);

        // Redirect ke halaman index setelah update selesai
        return redirect()->to(base_url('user'));
    }

    public function delete($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        $model = new UserCrud();

        // Menghapus data user berdasarkan ID
        $model->deleteUser($id);

        // Redirect ke halaman index setelah penghapusan selesai
        return redirect()->to(base_url('user'));
    }

    private function isLoggedIn()
    {
        return $this->session->has('logged_in');
    }
}

<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        // Mendapatkan data dari form login
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validasi login
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Login berhasil
                // Lakukan tindakan sesuai kebutuhan, seperti menyimpan data ke session, dll.
                return redirect()->to('dashboard');
            }
        }

        // Login gagal
        // Tampilkan pesan error atau redirect ke halaman login dengan pesan error
        return redirect()->to('login')->with('error', 'Invalid email or password');
    }
}

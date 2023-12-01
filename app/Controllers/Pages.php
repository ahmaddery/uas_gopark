<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Pages extends Controller
{
    public function dashboard()
    {
        // Memeriksa status login pengguna
        if (!$this->isLoggedIn()) {
            // Jika pengguna belum login, redirect ke halaman login
            return redirect()->to('pages/login');
        }

        return view('pages/dashboard');
    }

    private function isLoggedIn()
    {
        // Mendapatkan instance dari session
        $session = session();

        // Cek apakah ada data login di sesi
        return $session->has('logged_in');
    }
}

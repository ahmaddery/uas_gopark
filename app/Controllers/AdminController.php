<?php

namespace App\Controllers;
use App\Models\AdminModel;
use CodeIgniter\Controller;
use CodeIgniter\Session\SessionInterface;
use CodeIgniter\Config\Services;

class AdminController extends Controller
{
    protected $session;

    public function __construct()
    {
        $this->session = Services::session();
    }

    public function index()
    {
        // Cek apakah pengguna sudah login
        if (!$this->session->get('logged_in')) {
            // Jika pengguna belum login, redirect ke halaman login
            return redirect()->to('pages/login');
        }

        // Pengguna sudah login, lakukan aksi sesuai kebutuhan
        // ...
    }

    public function login()
    {
        $model = new AdminModel();
        $data = [];
    
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
    
            $user = $model->getUser($username, $password);
    
            if ($user) {
                // Login berhasil, simpan informasi pengguna dalam sesi
                $userData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'level' => $user['level'],
                    'full_name' => $user['full_name'],
                    'email' => $user['email'],
                    'logged_in' => true
                ];
    
                $this->session->set($userData);
    
                // Redirect ke halaman setelah login berhasil
                return redirect()->to('/pages/dashboard');
            } else {
                // Login gagal
                $data['error'] = 'Username atau password salah.';
            }
        }
    
        // Tampilkan halaman login
        echo view('pages/login', $data);
    }
    

    public function logout()
    {
        // Hapus sesi pengguna saat logout
        $this->session->destroy();

        // Redirect ke halaman login setelah logout
        return redirect()->to('pages/login');
    }
}


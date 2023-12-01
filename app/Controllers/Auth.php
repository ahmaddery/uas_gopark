<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
    public function register()
    {
        helper(['form']);

        // Validasi input
        $rules = [
            'nama_lengkap' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();

            // Simpan data ke database
            $model->save([
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ]);

            return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silakan login.');
        } else {
            return view('register');
        }
    }

    public function login()
    {
        helper(['form']);

        // Validasi input
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();

            $users = $model->where('email', $this->request->getPost('email'))->first();

            if ($users) {
                // Verifikasi password
                if (password_verify($this->request->getPost('password'), $users['password'])) {
                    // Set session untuk login
                    session()->set('isLoggedIn', true);
                    session()->set('userData', $users);

                    return redirect()->to('/scroll');  // untuk mengarahkan ke halaman tertentu ketika login berhasil
                } else {
                    return redirect()->to('/login')->with('error', 'Email atau password salah.');
                }
            } else {
                return redirect()->to('/login')->with('error', 'Email atau password salah.');
            }
        } else {
            return view('login');
        }
    }

    public function logout()
    {
        session()->remove('isLoggedIn');
        session()->remove('userData');

        return redirect()->to('/login');
    }
}

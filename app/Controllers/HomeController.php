<?php

namespace App\Controllers;

use App\Models\ModelCheckout;
use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('index_view');   // Untuk mengontrol button home 
    }

    
    public function service()  // Untuk mengontrol button contact
    {
         if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('service');
    }         // Memeriksa apakah pengguna telah login



    

    public function contact()  // Untuk mengontrol button contact
    {
         if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('contact');
    }         // Memeriksa apakah pengguna telah login


    public function about()  // Untuk mengontrol button about
    {
         if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        return view('about');
    }         // Memeriksa apakah pengguna telah login



    public function checkout()  // Untuk mengontrol button checkout
    {
        $model = new ModelCheckout();

        // Proses pengiriman data checkout
        if ($this->request->getMethod() === 'post') {
            // Validasi input
            $validation = \Config\Services::validation();
            $validation->setRules([
                'nama_lengkap' => 'required',
                'email' => 'required|valid_email',
                'nomor_kendaraan' => 'required',
                'metode_pembayaran' => 'required'
            ]);

            if ($validation->withRequest($this->request)->run()) {
                // Jika validasi sukses, simpan data checkout ke database atau lakukan operasi lainnya
                $checkoutData = [
                    'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                    'email' => $this->request->getPost('email'),
                    'nomor_kendaraan' => $this->request->getPost('nomor_kendaraan'),
                    'metode_pembayaran' => $this->request->getPost('metode_pembayaran')
                ];

                // Lakukan operasi create atau penyimpanan ke database
                $model->insert($checkoutData);

                // Tampilkan pesan sukses atau lakukan redirect ke halaman lain
                return redirect()->to('success')->with('message', 'Checkout berhasil!');
            } else {
                // Jika validasi gagal, tampilkan kembali form dengan pesan error
                return view('checkout', ['validation' => $validation]);
            }
        }

        // Tampilkan halaman checkout
        return view('checkout');
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

    public function success()  // Untuk mengontrol halaman sukses
    {
        $message = session()->getFlashdata('message'); // Mengambil pesan sukses dari session
        return view('success', ['message' => $message]); // Tampilkan halaman sukses dengan pesan
    }
}

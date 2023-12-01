<?php

namespace App\Controllers;

use App\Models\ParkirModel;

class scrl extends BaseController
{
    public function index()
    {
        // Memeriksa apakah pengguna telah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $parkirModel = new ParkirModel();
        $data['parkir'] = $parkirModel->findAll();

        return view('scroll', $data);
    }
}

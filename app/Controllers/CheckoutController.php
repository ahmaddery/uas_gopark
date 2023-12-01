<?php

namespace App\Controllers;

use App\Models\CheckoutModel;

class CheckoutController extends BaseController
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

        $checkoutModel = new CheckoutModel();
        $data['checkoutItems'] = $checkoutModel->findAll();

        return view('pages/checkout', $data);
    }

    public function delete($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        $checkoutModel = new CheckoutModel();
        $checkoutModel->delete($id);

        return redirect()->to('pages/checkout')->with('success', 'Data checkout berhasil dihapus.');
    }

    private function isLoggedIn()
    {
        return $this->session->has('logged_in');
    }
}

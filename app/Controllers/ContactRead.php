<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class ContactRead extends Controller
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

        $model = new ContactModel();
        $data['contacts'] = $model->findAll();

        return view('pages/ContactUs', $data);
    }

    public function delete($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        $model = new ContactModel();
        $model->delete($id);

        // Redirect to the index page after deleting
        return redirect()->to('/contactread');
    }

    private function isLoggedIn()
    {
        return $this->session->has('logged_in');
    }
}

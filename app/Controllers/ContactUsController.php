<?php

namespace App\Controllers;

use App\Models\ContactUsModel;
use CodeIgniter\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function saveContact()
    {
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required',
            'email' => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if (!$validation->run(request()->getPost())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $contactUsModel = new ContactUsModel();

        $data = [
            'user_id' => session()->get('user_id'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message')
        ];

       // ...

            $contactUsModel->saveContact($data);

            return redirect()->to('/contact_us')->with('success', 'Pesan berhasil dikirim!');



    }


}




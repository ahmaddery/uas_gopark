<?php

namespace App\Controllers;

use App\Models\CrudModel;
use CodeIgniter\Controller;

class CrudController extends Controller
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

        $model = new CrudModel();
        $data['parkir'] = $model->getAllData();

        return view('pages/index', $data);
    }

    private function isLoggedIn()
    {
        return $this->session->has('logged_in');
    }

    public function create()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        return view('pages/create');
    }

    public function store()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/login');
        }

        $model = new CrudModel();

        // Mengunggah gambar jika ada
        $foto = $this->request->getFile('foto');
        $fotoName = '';
        if ($foto->isValid() && !$foto->hasMoved()) {
            $fotoName = $foto->getRandomName();
            $foto->move('./upload', $fotoName);
        }

        $data = [
            'pemilik_parkir' => $this->request->getPost('pemilik_parkir'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'foto' => $fotoName
        ];

        $model->insertData($data);

        return redirect()->to('pages/index');
    }

    public function edit($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        $model = new CrudModel();
        $data['parkir'] = $model->getDataById($id);

        return view('pages/edit', $data);
    }

    public function update($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('pages/login');
        }

        $model = new CrudModel();

        // Mengunggah gambar jika ada
        $foto = $this->request->getFile('foto');
        $fotoName = '';
        if ($foto->isValid() && !$foto->hasMoved()) {
            $fotoName = $foto->getRandomName();
            $foto->move('./upload', $fotoName);
        }

        $data = [
            'pemilik_parkir' => $this->request->getPost('pemilik_parkir'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        // Mengupdate foto hanya jika ada gambar yang diunggah
        if (!empty($fotoName)) {
            $data['foto'] = $fotoName;
        }

        $model->updateData($id, $data);

        return redirect()->to('pages/index');
    }

    public function delete($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/login');
        }

        $model = new CrudModel();
        $model->deleteData($id);

        return redirect()->to('pages/index');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    protected $table = 'parkir';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pemilik_parkir', 'deskripsi', 'foto'];

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getDataById($id)
    {
        return $this->find($id);
    }

    public function insertData($data)
    {
        $this->insert($data);
    }

    public function updateData($id, $data)
    {
        $this->update($id, $data);
    }

    public function deleteData($id)
    {
        $this->delete($id);
    }
}

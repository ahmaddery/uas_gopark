<?php

namespace App\Models;

use CodeIgniter\Model;

class UserCrud extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'email', 'password'];

    public function getUsers()
    {
        return $this->findAll();
    }

    public function getUser($id)
    {
        return $this->find($id);
    }

    public function updateUser($id, $data)
    {
        $this->where('id', $id)->set($data)->update();
    }

    public function deleteUser($id)
    {
        $this->where('id', $id)->delete();
    }
}

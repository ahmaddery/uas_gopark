<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'level', 'full_name', 'email'];

    public function getUser($username, $password)
    {
        return $this->where('username', $username)
            ->where('password', $password)
            ->first();
    }
}

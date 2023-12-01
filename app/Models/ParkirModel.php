<?php

namespace App\Models;

use CodeIgniter\Model;

class ParkirModel extends Model
{
    protected $table = 'parkir';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pemilik_parkir', 'deskripsi', 'foto'];
}

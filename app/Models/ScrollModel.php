<?php

namespace App\Models;

use CodeIgniter\Model;

class ScrollModel extends Model
{
    protected $table = 'parkir';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'pemilik_parkir', 'deskripsi', 'foto'];

    // Tambahkan method lain yang diperlukan sesuai kebutuhan Anda
}

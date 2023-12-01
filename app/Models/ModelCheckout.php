<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCheckout extends Model
{
    protected $table = 'check_out';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'email', 'nomor_kendaraan', 'metode_pembayaran'];
}

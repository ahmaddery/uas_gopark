<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckoutModel extends Model
{
    protected $table = 'check_out';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'email', 'nomor_kendaraan', 'metode_pembayaran'];

    public function getAllCheckout()
    {
        return $this->findAll();
    }

    public function deleteCheckout($id)
    {
        return $this->delete($id);
    }
}

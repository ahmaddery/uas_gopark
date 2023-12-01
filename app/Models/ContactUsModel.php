<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactUsModel extends Model
{
    protected $table = 'contact_us';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'subject', 'message'];

    public function saveContact($data)
    {
        return $this->insert($data);
    }
}




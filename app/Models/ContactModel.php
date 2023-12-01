<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact_us';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'subject', 'message'];
}

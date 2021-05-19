<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
  protected $table = 'admin';
  protected $allowedFields = ['nama', 'email', 'password'];

  function get_loginAdmin($email)
  {
    $builder = $this->db->table('admin');
    $builder->where('email', $email);
    $log = $builder->get()->getRow();
    return $log;
  }
}

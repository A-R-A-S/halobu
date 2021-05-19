<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
  protected $table = 'guru';
  protected $allowedFields = ['nama', 'email', 'password'];

  function get_loginGuru($email)
  {
    $builder = $this->db->table('guru');
    $builder->where('email', $email);
    $log = $builder->get()->getRow();
    return $log;
  }
}

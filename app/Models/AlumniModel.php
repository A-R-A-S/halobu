<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
  protected $table = 'alumni';
  protected $allowedFields = ['nama', 'angkatan', 'jurusan', 'keterangan'];
}

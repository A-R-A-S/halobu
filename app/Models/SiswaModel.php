<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $allowedFields = ['NIS', 'nama', 'kelas', 'jurusan', 'angkatan', 'email', 'password'];

    function get_loginSiswa($email)
    {
        $builder = $this->db->table('siswa');
        $builder->where('email', $email);
        $log = $builder->get()->getRow();
        return $log;
    }
}

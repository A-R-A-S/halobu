<?php

namespace App\Controllers;

class Siswa extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Sistem informasi BK | Siswa page'
    ];
    return view('siswa/index', $data);
  }
}

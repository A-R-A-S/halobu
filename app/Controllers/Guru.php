<?php

namespace App\Controllers;

class Guru extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Sistem informasi BK | Guru page'
    ];
    return view('guru/index', $data);
  }
}

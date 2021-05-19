<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Admin extends BaseController
{
  protected $alumniModel;

  public function __construct()
  {
    $this->alumniModel = new AlumniModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Sistem informasi BK | Admin page'
    ];
    return view('admin/index', $data);
  }

  public function formAlumni()
  {
    $data = [
      'title' => 'Sistem informasi BK | Form alumni',
      'validation' => \Config\Services::validation()
    ];
    return view('alumni/index', $data);
  }

  public function addAlumni()
  {
    if (!$this->validate([
      'nama' => ['label' => 'alumni name', 'rules' => 'required|trim'],
      'angkatan' => ['label' => 'angkatan', 'rules' => 'required|trim'],
      'jurusan' => ['label' => 'Jurusan', 'rules' => 'required|trim'],
      'keterangan' => ['label' => 'institutions or higher education', 'rules' => 'required|trim'],
    ])) {
      return redirect()->to('/admin/formAlumni')->withInput();
    }
    $this->alumniModel->save([
      'nama' => $this->request->getVar('nama'),
      'angkatan' => $this->request->getVar('angkatan'),
      'jurusan' => $this->request->getVar('jurusan'),
      'keterangan' => $this->request->getVar('keterangan')
    ]);
    session()->setFlashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fas fa-check"></i> Berhasil!</h5>Data anda telah disimpan. Terima kasih!</div>');
    return redirect()->to('/');
  }
}

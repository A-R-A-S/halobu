<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\GuruModel;
use App\Models\SiswaModel;

class Auth extends BaseController
{
  protected $adminModel;
  protected $guruModel;
  protected $siswaModel;

  public function __construct()
  {
    $this->adminModel = new AdminModel();
    $this->guruModel = new GuruModel();
    $this->siswaModel = new SiswaModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Sistem informasi BK | Landing page'
    ];
    return view('auth/index', $data);
  }

  public function logAdmin()
  {
    $data = [
      'title' => 'Sistem informasi BK | Login admin',
      'validation' => \Config\Services::validation()
    ];
    return view('auth/logAdmin', $data);
  }

  public function loginAdmin()
  {
    if (!$this->validate([
      'email' => ['label' => 'Email', 'rules' => 'required|trim|valid_email'],
      'password' => ['label' => 'Password', 'rules' => 'required|trim']
    ])) {
      return redirect()->to('/auth/logadmin')->withInput();
    }
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');
    $user = $this->adminModel->get_loginAdmin($email);

    // jika usernya ada
    if ($user) {
      // cek passwordnya
      if (password_verify($password, $user->password)) {
        $data = [
          'log' => TRUE,
          'nama' => $user->nama,
          'email' => $user->email,
        ];
        session()->set($data);
        return redirect()->to('/admin');
      } else {
        session()->setFlashdata('message', '<div class="alert alert-danger accent-grayalert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Perhatian!</h5>
                Password anda salah!</div>');
        return redirect()->to('/auth/loginadmin');
      }
    } else {
      session()->setFlashdata('message', '<div class="alert alert-danger accent-grayalert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
          Email belum terdaftar!</div>');
      return redirect()->to('/');
    }
  }

  public function regAdmin()
  {
    $data = [
      'role' => 'admin',
      'title' => 'Sistem informasi BK | Registration page',
      'validation' => \Config\Services::validation()
    ];
    return view('auth/regadmin', $data);
  }

  public function regisAdmin()
  {
    if (!$this->validate([
      'nama' => ['label' => 'Name', 'rules' => 'required|trim'],
      'email' => [
        'label' => 'Email',
        'rules' => 'required|trim|valid_email|is_unique[admin.email]',
        'errors' => [
          'is_unique' => 'This email has already registered!'
        ]
      ],
      'pass1' => [
        'label' => 'Password',
        'rules' => 'required|trim|min_length[6]|matches[pass2]',
        'errors' => [
          'matches' => 'Password dont match!',
          'min_length' => 'Password too short!'
        ]
      ],
      'pass2' => ['label' => 'Password', 'rules' => 'required|trim|matches[pass1]']
    ])) {
      return redirect()->to('/auth/regadmin')->withInput();
    }
    $this->adminModel->save([
      'nama' => $this->request->getVar('nama'),
      'email' => $this->request->getVar('email'),
      'password' => password_hash($this->request->getVar('pass1'), PASSWORD_DEFAULT),
    ]);
    session()->setFlashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fas fa-check"></i> Selamat!</h5>Akun anda berhasil dibuat. Silahkan login.</div>');
    return redirect()->to('/');
  }

  public function logGuru()
  {
    $data = [
      'title' => 'Sistem informasi BK | Login guru',
      'validation' => \Config\Services::validation()
    ];
    return view('auth/logGuru', $data);
  }

  public function loginGuru()
  {
    if (!$this->validate([
      'email' => ['label' => 'Email', 'rules' => 'required|trim|valid_email'],
      'password' => ['label' => 'Password', 'rules' => 'required|trim']
    ])) {
      return redirect()->to('/auth/logguru')->withInput();
    }
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');
    $user = $this->guruModel->get_loginGuru($email);

    // jika usernya ada
    if ($user) {
      // cek passwordnya
      if (password_verify($password, $user->password)) {
        $data = [
          'log' => TRUE,
          'nama' => $user->nama,
          'email' => $user->email,
        ];
        session()->set($data);
        return redirect()->to('/guru');
      } else {
        session()->setFlashdata('message', '<div class="alert alert-danger accent-grayalert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Perhatian!</h5>
                Password anda salah!</div>');
        return redirect()->to('/auth/logguru');
      }
    } else {
      session()->setFlashdata('message', '<div class="alert alert-danger accent-grayalert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
          Email belum terdaftar!</div>');
      return redirect()->to('/');
    }
  }

  public function regGuru()
  {
    $data = [
      'role' => 'guru',
      'title' => 'Sistem informasi BK | Registration page',
      'validation' => \Config\Services::validation()
    ];
    return view('auth/regguru', $data);
  }

  public function regisGuru()
  {
    if (!$this->validate([
      'nama' => ['label' => 'Name', 'rules' => 'required|trim'],
      'email' => [
        'label' => 'Email',
        'rules' => 'required|trim|valid_email|is_unique[admin.email]',
        'errors' => [
          'is_unique' => 'This email has already registered!'
        ]
      ],
      'pass1' => [
        'label' => 'Password',
        'rules' => 'required|trim|min_length[6]|matches[pass2]',
        'errors' => [
          'matches' => 'Password dont match!',
          'min_length' => 'Password too short!'
        ]
      ],
      'pass2' => ['label' => 'Password', 'rules' => 'required|trim|matches[pass1]']
    ])) {
      return redirect()->to('/auth/regguru')->withInput();
    }
    $this->guruModel->save([
      'nama' => $this->request->getVar('nama'),
      'email' => $this->request->getVar('email'),
      'password' => password_hash($this->request->getVar('pass1'), PASSWORD_DEFAULT),
    ]);
    session()->setFlashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fas fa-check"></i> Selamat!</h5>Akun anda berhasil dibuat. Silahkan login.</div>');
    return redirect()->to('/');
  }

  public function logSiswa()
  {
    $data = [
      'title' => 'Sistem informasi BK | Login siswa',
      'validation' => \Config\Services::validation()
    ];
    return view('auth/logSiswa', $data);
  }

  public function loginSiswa()
  {
    if (!$this->validate([
      'email' => ['label' => 'Email', 'rules' => 'required|trim|valid_email'],
      'password' => ['label' => 'Password', 'rules' => 'required|trim']
    ])) {
      return redirect()->to('/auth/logsiswa')->withInput();
    }
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');
    $user = $this->siswaModel->get_loginSiswa($email);

    // jika usernya ada
    if ($user) {
      // cek passwordnya
      if (password_verify($password, $user->password)) {
        $data = [
          'log' => TRUE,
          'nama' => $user->nama,
          'email' => $user->email,
        ];
        session()->set($data);
        return redirect()->to('/siswa');
      } else {
        session()->setFlashdata('message', '<div class="alert alert-danger accent-grayalert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Perhatian!</h5>
                Password anda salah!</div>');
        return redirect()->to('/auth/logsiswa');
      }
    } else {
      session()->setFlashdata('message', '<div class="alert alert-danger accent-grayalert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
          Email belum terdaftar!</div>');
      return redirect()->to('/');
    }
  }

  public function regSiswa()
  {
    $data = [
      'role' => 'siswa',
      'title' => 'Sistem informasi BK | Registration page',
      'validation' => \Config\Services::validation()
    ];
    return view('auth/regsiswa', $data);
  }

  public function regisSiswa()
  {
    if (!$this->validate([
      'NIS' => ['label' => 'NIS', 'rules' => 'required|trim'],
      'nama' => ['label' => 'Name', 'rules' => 'required|trim'],
      'email' => [
        'label' => 'Email',
        'rules' => 'required|trim|valid_email|is_unique[admin.email]',
        'errors' => [
          'is_unique' => 'This email has already registered!'
        ]
      ],
      'pass1' => [
        'label' => 'Password',
        'rules' => 'required|trim|min_length[6]|matches[pass2]',
        'errors' => [
          'matches' => 'Password dont match!',
          'min_length' => 'Password too short!'
        ]
      ],
      'pass2' => ['label' => 'Password', 'rules' => 'required|trim|matches[pass1]']
    ])) {
      return redirect()->to('/auth/regsiswa')->withInput();
    }
    $this->siswaModel->save([
      'NIS' => $this->request->getVar('NIS'),
      'nama' => $this->request->getVar('nama'),
      'kelas' => $this->request->getVar('kelas'),
      'jurusan' => $this->request->getVar('jurusan'),
      'angkatan' => $this->request->getVar('angkatan'),
      'email' => $this->request->getVar('email'),
      'password' => password_hash($this->request->getVar('pass1'), PASSWORD_DEFAULT),
    ]);
    session()->setFlashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fas fa-check"></i> Selamat!</h5>Akun anda berhasil dibuat. Silahkan login.</div>');
    return redirect()->to('/');
  }

  public function logout()
  {
    $session = ['log', 'name', 'email'];
    session()->remove($session);
    session()->setFlashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h5><i class="icon fas fa-check"></i> Sampai berjumpa lagi!</h5>
    Kamu berhasil logout.</div>');
    return redirect()->to('/');
  }
}

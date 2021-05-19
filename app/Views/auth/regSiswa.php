<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <h1>SI BK <a>(HaloBu)</a></h1>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new account</p>
        <form action="/auth/regissiswa" method="post">
          <?= csrf_field(); ?>
          <div class="form-group">
            <label>Select type your account</label>
            <div class="row">
              <div class="col-sm-4">
                <a href="/auth/regadmin" class="<?= $role == 'admin' ? ' btn btn-info btn-block' : 'btn btn-outline-info btn-block' ?>">
                  Admin
                </a>
              </div>
              <div class=" col-sm-4">
                <a href="/auth/regguru" class="<?= $role == 'guru' ? ' btn btn-info btn-block' : 'btn btn-outline-info btn-block' ?>">
                  Guru
                </a>
              </div>
              <div class="col-sm-4">
                <a href="/auth/regsiswa" class="<?= $role == 'siswa' ? ' btn btn-info btn-block' : 'btn btn-outline-info btn-block' ?>">
                  Siswa
                </a>
              </div>
              </select>
            </div>
          </div>
          <label>Masukan NIS (Nomor Induk Siswa)</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control <?= ($validation->hasError('NIS')) ? 'is-invalid' : ''; ?>" id="NIS" name="NIS" value="<?= old('NIS'); ?>" placeholder="NIS" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback"><?= $validation->getError('NIS'); ?></span>
          </div>
          <label>Masukan nama lengkap</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>" placeholder="Full name" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback"><?= $validation->getError('nama'); ?></span>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Kelas</label>
            <div class="col-sm-8">
              <select class="form-control" id="kelas" name="kelas">
                <option value="X">X (sepuluh)</option>
                <option value="XI">XI (sebelas)</option>
                <option value="XII">XII (duabelas)</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jurusan</label>
            <div class="col-sm-8">
              <select class="form-control" id="jurusan" name="jurusan">
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                <option value="MM">MM</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Angkatan</label>
            <div class="col-sm-8">
              <select class="form-control" id="angkatan" name="angkatan">
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2020">2021</option>
                <option value="2020">2022</option>
              </select>
            </div>
          </div>
          <label>Masukan email</label>
          <div class="input-group mb-3">
            <input type="email" class="form-control <?= ($validation->hasError('pass1')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <span class="error invalid-feedback"><?= $validation->getError('email'); ?></span>
          </div>
          <label>Masukan password</label>
          <div class="input-group mb-3">
            <input type="password" class="form-control <?= ($validation->hasError('pass1')) ? 'is-invalid' : ''; ?>" id="pass1" name="pass1" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <label>Ketik ulang password</label>
          <div class="input-group mb-3">
            <input type="password" class="form-control <?= ($validation->hasError('pass2')) ? 'is-invalid' : ''; ?>" id="pass2" name="pass2" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <span class="error invalid-feedback"><?= $validation->getError('pass1'); ?></span>
          </div>
          <button type="submit" class="btn btn-block btn-info">
            Register
          </button>
        </form>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <div class="text-center">
    <a href="/">I already have a account</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2021-2022 <b><a class="text-black">Pilkom-A18</a></b><br>
    Software Enginnering
  </div>
  <?= $this->endSection(); ?>
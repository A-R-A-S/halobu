<?= $this->Extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <h1>SI BK <a>(HaloBu)</a></h1>
      <h3>Login Admin</h3>
    </div>
    <?= session()->getFlashdata('message');  ?>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Enter your username and password</p>

        <form action="/auth/loginadmin" method="post">
          <?= csrf_field(); ?>
          <div class="input-group mb-3">
            <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Username" value="<?= old('email'); ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span class="error invalid-feedback"><?= $validation->getError('email'); ?></span>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <span class="error invalid-feedback"><?= $validation->getError('password'); ?></span>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="reset" class="btn btn-default btn-block">Reset</button>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
              <button type="submit" class="btn btn-success btn-block">LOGIN</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <div class="text-center">
    <a href="/">Back</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2021-2022 <b><a class="text-black">Pilkom-A18</a></b><br>
    Software Enginnering
  </div>
  <?= $this->endSection(); ?>
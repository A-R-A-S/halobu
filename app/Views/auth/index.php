<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="hold-transition lockscreen">
  <div class="lockscreen-wrapper">
    <?= session()->getFlashdata('message');  ?>
    <div class="lockscreen-logo">
      <h1>SI BK <a>(HaloBu)</a></h1>
      <h5><b>Sistem Informasi Bimbingan Konseling</b> berbasis web bernama "HaloBu".</h5>
    </div>
  </div>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-7">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="help-block">
                  Aplikasi ini memudahkan siswa berkonsultasi dengan konselor dimanapun dan kapanpun, serta meningkatkan layanan BK sesuai dengan perkembangan teknologi.<br><br>
                  <h6>Alumni di mohon untuk mengisi formulir berikut:</h6>
                  <a href="/admin/formAlumni" class="btn btn-info">Form Alumni</a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="container">
                  <h3 class="text-center">LOGIN Sebagai</h3>
                  <a href="/auth/logAdmin" class="btn btn-info btn-block">Admin</a>
                  <a href="/auth/logGuru" class="btn btn-info btn-block">Guru</a>
                  <a href="/auth/logSiswa" class="btn btn-info btn-block">Siswa</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <a href="/auth/regAdmin">Register a new account</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2021-2022 <b><a class="text-black">Pilkom-A18</a></b><br>
    Software Enginnering
  </div>
  <?= $this->endSection(); ?>
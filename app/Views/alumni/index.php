<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <h1>SI BK <a>(HaloBu)</a></h1>
    </div>
  </div>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Formulir Data Alumni</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/admin/addalumni" method="POST" class="form-horizontal">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama_alumni" placeholder="Masukan nama lengkap" autofocus>
                  <span class="error invalid-feedback"><?= $validation->getError('nama'); ?></span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tahun Lulus</label>
                <div class="col-sm-9">
                  <select class="form-control" id="tahun_lulus" name="tahun_lulus">
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2020">2021</option>
                    <option value="2020">2022</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jurusan</label>
                <div class="col-sm-9">
                  <select class="form-control" id="jurusan" name="jurusan">
                    <option value="RPL">RPL (Rekayasa Perangkat Lunak)</option>
                    <option value="TKJ">TKJ (Teknik Komputer dan Jaringan)</option>
                    <option value="MM">MM (Multimedia)</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Instansi / Pendidikan Tinggi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan" placeholder="Masukan nama instansi / pendidikan tinggi">
                  <span class="error invalid-feedback"><?= $validation->getError('keterangan'); ?></span>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="reset" class="btn btn-default">Reset</button>
              <button type="submit" class="btn btn-info float-right">Save</button>
            </div>
            <!-- /.card-footer -->
          </form>
        </div>
      </div>
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
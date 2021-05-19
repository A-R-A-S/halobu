<?= $this->Extend('layout/template'); ?>

<?= $this->Section('content'); ?>
<?= $this->include('layout/navsidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Selamat datang <b><?= session('nama'); ?></b> di halaman Siswa</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 4.0.4
    </div>
    <strong>Copyright &copy; 2021-2022 <b><a class="text-black">Pilkom-A18. </a></b></strong>Software Enginnering
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<body class="skin-black">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a class="logo"><b>Sistem Akademik<span class="text-info"> Ku</span></b></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                                <span class="hidden-xs">Aditya Setiadi</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                        Aditya Setiadi - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Aditya Setiadi</p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU</li>
                    <li class="sidebar-menu">
                        <a href="/student">
                            <i class="fa fa-home"></i><span>Beranda</span>
                        </a>
                    </li>
                    <li class="sidebar-menu">
                        <a href="http://localhost/student.upi.edu/dashboard.php">
                            <i class="fa fa-pie-chart"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu">
                        <a href="#">
                            <i class="fa fa-list-alt"></i><span>Berita</span>
                        </a>
                    </li>
                    <li class="sidebar-menu">
                        <a href="http://localhost/student.upi.edu/kalaka.php">
                            <i class="fa fa-calendar-o"></i><span>Kalender Akademik</span>
                        </a>
                    </li>
                    <li class="active treeview">
                        <a href="/student/profile">
                            <i class="fa fa-user"></i><span>Profil</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-o"></i><span>Rencana Studi</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/cek_penggunaan.php"><i class="fa fa-minus"></i> IRS</a></li>
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/tampil_penggunaan.php"><i class="fa fa-minus"></i> PRS</a></li>
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/tampil_penggunaan.php"><i class="fa fa-minus"></i> KRS</a></li>
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/tampil_penggunaan.php"><i class="fa fa-minus"></i> Pesan</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-inbox"></i><span>Hasil Studi</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/cek_penggunaan.php"><i class="fa fa-minus"></i> Status Akademis</a></li>
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/tampil_penggunaan.php"><i class="fa fa-minus"></i> Nilai</a></li>
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/tampil_penggunaan.php"><i class="fa fa-minus"></i> Transkip Sementara</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-money"></i><span>Pembayaran</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/cek_penggunaan.php"><i class="fa fa-minus"></i> Riwayat Pembayaran</a></li>
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/tampil_penggunaan.php"><i class="fa fa-minus"></i> Tagihan</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bookmark"></i><span>Perkuliahan</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/cek_penggunaan.php"><i class="fa fa-minus"></i> Jadwal Kuliah</a></li>
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/tampil_penggunaan.php"><i class="fa fa-minus"></i> Kehadiran Kuliah</a></li>
                            <li><a href="http://localhost/student.upi.edu/Penggunaan/tampil_penggunaan.php"><i class="fa fa-minus"></i> Jadwal Sidang</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <div class="content-wrapper">
            <section class="content-header">
                <h1 class="fa fa-user"> Biodata Mahasiswa</h1>
                <ol class="breadcrumb">
                    <li><i class="fa fa-windows"></i> Home</a></li>
                    <li class="active">profil</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-tabs-custom col-md-12">
                            <!-- Tabs within a box -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profil-chart" data-toggle="tab">Profil Diri</a></li>
                                <li><a href="#sekolah-chart" data-toggle="tab">Sekolah</a></li>
                            </ul>
                            <div class="tab-content no-padding">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="profil-chart">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>NIM</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Status Mahasiswa</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Masuk</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Fakultas</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Program Studi</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>RT</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>RW</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kelurahan</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kecamatan</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kabupaten/Kota</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Provinsi</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kode pos</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Telepon</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Golongan Darah</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="box box-footer no-border">
                                        <a href="#" class="btn btn-danger"> Edit Biodata</a>
                                    </div>
                                </div>
                                <div class="chart tab-pane" id="sekolah-chart">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Asal SMA</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kota SMA</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="box box-footer no-border">
                                        <a href="#" class="btn btn-danger"> Edit Biodata</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2018-2022 <a>Pilkom Mobile</a>,</strong> Academy.edu.
        </footer>
    </div><!-- ./wrapper -->
    <?= $this->EndSection(); ?>
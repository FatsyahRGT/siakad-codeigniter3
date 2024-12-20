<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- <h1>
      Dashboard Siakad STIKOMCKI
    </h1> -->
    <!-- Tambahkan Gambar di Sini -->
    <div class="text-center">
      <img src="<?= base_url('assets/img/stikomnew.jpg'); ?>" alt="Dashboard Image" style="width: 100%; max-width: 600px; height: auto; margin-top: 10px;">
    </div>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol> -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- Box 1: Bounce Rate -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?= $jumlah_dosen; ?></sup></h3>
            <p>Dosen</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <!-- Box 2: Jumlah Mahasiswa -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3><?= $jumlah_mahasiswa; ?></h3>
            <p>Mahasiswa</p>
          </div>
          <div class="icon">
            <i class="ion ion-university"></i>
          </div>
          <a href="<?php echo base_url('mahasiswa/index'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <!-- Box 3: User Registrations -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?= $jumlah_user; ?></h3>
            <p>Pengguna Terdaftar</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?= base_url('user'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <!-- Box 4: Unique Visitors -->
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?= $jumlah_matkul; ?></h3>
            <p>Mata Kuliah</p>
          </div>
          <div class="icon">
            <i class="fa fa-book"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

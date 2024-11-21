<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Fatsyah Regiyanto</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        
        <li>
          <a href="<?php echo base_url('Admin/dashboard'); ?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('mahasiswa/index'); ?>">
              <i class="fa fa-graduation-cap"></i>
              <span>Mahasiswa</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('dosen/index'); ?>">
              <i class="fa fa-user"></i>
              <span>Dosen</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('matakuliah/index'); ?>">
              <i class="fa fa-archive"></i>
              <span>Mata Kuliah</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('jurusan/index'); ?>">
              <i class="fa fa-university"></i>
              <span>Jurusan</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('charts'); ?>">
              <i class="fa fa-book"></i>
              <span>Jadwal Kuliah</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('charts'); ?>">
              <i class="fa fa-lock"></i>
              <span>Ganti Password</span>
          </a>
        </li>
        <li>

          <a href="<?php echo base_url('charts'); ?>">
              <i class="fa fa-sign-out"></i>
              <span>LogOut</span>
          </a>
        </li>

      </ul>
    </section>
</aside>
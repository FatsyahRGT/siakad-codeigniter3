<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <h1>
      Pengguna
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Pengguna</li>
    </ol>
  </section>

  <!-- Content Section -->
  <section class="content">
    <!-- Table Index View Menampilkan data mahasiswa -->
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>NAMA USER</th>
          <th>EMAIL</th>
          <th>LEVEL</th>
          <th colspan="3">AKSI</th> <!-- Kolom Aksi untuk detail, edit, hapus -->
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach ($user as $usr): ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $usr->username ?></td>
          <td><?php echo $usr->email ?></td>
          <td><?php echo $usr->level ?></td>
          <td><?php echo $usr->foto_user ?></td>

          <!-- Aksi Detail -->
          <td>
            <a href="<?php echo site_url('user/detail/'.$usr->id); ?>" class="btn btn-success btn-sm">
              <i class="fa fa-search-plus"></i>
            </a>
          </td>

          <!-- Aksi Edit -->
          <td>
            <a href="<?php echo site_url('user/edit/'.$usr->id); ?>" class="btn btn-primary btn-sm">
              <i class="fa fa-edit"></i>
            </a>
          </td>

          <!-- Aksi Hapus -->
          <td>
            <a href="<?php echo site_url('UserController/hapus/'.$usr->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?');">
              <i class="fa fa-trash"></i>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>  
</div>

<!-- Script untuk mengaktifkan datepicker -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $(document).ready(function(){
    $('#tgl_lahir').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true
    });
  });
</script>

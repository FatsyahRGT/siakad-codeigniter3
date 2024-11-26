<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <h1>
      Data Mahasiswa
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Mahasiswa</li>
    </ol>
  </section>

  <!-- Content Section -->
  <section class="content">
    <!-- Tombol untuk membuka modal form tambah data -->
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah Data Mahasiswa  
    </button>

    <!-- Table Index View Menampilkan data mahasiswa -->
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>NAMA MAHASISWA</th>
          <th>NIM</th>
          <th>TANGGAL LAHIR</th>
          <th>JURUSAN</th>
          <th colspan="3">AKSI</th> <!-- Kolom Aksi untuk detail, edit, hapus -->
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $mhs->nama ?></td>
          <td><?php echo $mhs->nim ?></td>
          <td><?php echo $mhs->tgl_lahir ?></td>
          <td><?php echo $mhs->jurusan ?></td>

          <!-- Aksi Detail -->
          <td>
            <a href="<?php echo site_url('mahasiswa/detail/'.$mhs->id_mahasiswa); ?>" class="btn btn-success btn-sm">
              <i class="fa fa-search-plus"></i>
            </a>
          </td>

          <!-- Aksi Edit -->
          <td>
            <a href="<?php echo site_url('mahasiswa/edit/'.$mhs->id_mahasiswa); ?>" class="btn btn-primary btn-sm">
              <i class="fa fa-edit"></i>
            </a>
          </td>

          <!-- Aksi Hapus -->
          <td>
            <a href="<?php echo site_url('MahasiswaController/hapus/'.$mhs->id_mahasiswa); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?');">
              <i class="fa fa-trash"></i>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>

  <!-- Modal Form Input Data Mahasiswa -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- CRUD Form Modal -->
        <div class="modal-body">
          <?php echo form_open_multipart('MahasiswaController/tambah_aksi'); ?>

            <div class="form-group">
              <label for="nama">Nama Mahasiswa</label>
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
            </div>

            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM" required>
            </div>

            <div class="form-group">
              <label for="tgl_lahir">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="yyyy-mm-dd" required>
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukkan Jurusan" required>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required></textarea>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
            </div>

            <div class="form-group">
              <label for="no_telp">No Telepon</label>
              <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan No Telpon" required>
            </div>

            <div class="form-group">
              <label for="no_telp">Upload Foto</label>
              <input type="file" name="foto" id="foto" class="form-control" placeholder="Masukkan No Telpon" required>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
              <button type="reset" class="btn btn-danger">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
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

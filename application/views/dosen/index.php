<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <h1>
      Data Dosen
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Dosen</li>
    </ol>
  </section>

  <!-- Content Section -->
  <section class="content">
    <!-- Tombol untuk membuka modal form tambah data -->
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah Data Dosen  
    </button>

    <!-- Table Index View Menampilkan data mahasiswa -->
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>NAMA DOSEN</th>
          <th>NID</th>
          <th>GELAR</th>
          <th>EMAIL</th>
          <th colspan="3">AKSI</th> <!-- Kolom Aksi untuk detail, edit, hapus -->
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach ($dosen as $dsn): ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $dsn->nama_dosen ?></td>
          <td><?php echo $dsn->nid ?></td>
          <td><?php echo $dsn->gelar ?></td>
          <td><?php echo $dsn->email ?></td>

          <!-- Aksi Detail -->
          <td>
            <a href="<?php echo site_url('dosen/detail/'.$dsn->id_dosen); ?>" class="btn btn-success btn-sm">
              <i class="fa fa-search-plus"></i>
            </a>
          </td>

          <!-- Aksi Edit -->
          <td>
            <a href="<?php echo site_url('dosen/edit/'.$dsn->id_dosen); ?>" class="btn btn-primary btn-sm">
              <i class="fa fa-edit"></i>
            </a>
          </td>

          <!-- Aksi Hapus -->
          <td>
            <a href="<?php echo site_url('DosenController/hapus/'.$dsn->id_dosen); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?');">
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
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA DOSEN</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- CRUD Form Modal -->
        <div class="modal-body">
          <?php echo form_open_multipart('DosenController/tambah_aksi'); ?>

            <div class="form-group">
              <label for="nama_dosen">Nama Dosen</label>
              <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" placeholder="Masukkan Nama Dosen" required>
            </div>

            <div class="form-group">
              <label for="nid">NID</label>
              <input type="text" name="nid" id="nid" class="form-control" placeholder="Masukkan NID" required>
            </div>

            <div class="form-group">
              <label for="gelar">Gelar</label>
              <input type="text" name="gelar" id="gelar" class="form-control" placeholder="Masukkan Gelar Terakhir Anda" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required></textarea>
            </div>

            <div class="form-group">
              <label for="no_telp">No Telepon</label>
              <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon" required>
            </div>

            <div class="form-group">
              <label for="prodi">Prodi</label>
              <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Masukkan No Program Studi" required>
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukkan No Jurusan" required>
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


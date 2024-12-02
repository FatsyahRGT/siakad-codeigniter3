<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <h1>
      Jadwal
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Jadwal</li>
    </ol>
  </section>

  <!-- Content Section -->
  <section class="content">
    <!-- Tombol untuk membuka modal form tambah data -->
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah Jadwal
    </button>

    <!-- Table Index View Menampilkan data jurusan -->
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>NAMA MATA KULIAH</th>
          <th>NAMA DOSEN</th>
          <th>JURUSAN</th>
          <th colspan="3">AKSI</th> 
        </tr>
      </thead>  
      <tbody>
        <?php $no = 1; foreach ($jurusan as $jsn): ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $jsn->nama_jurusan ?></td>
          <td><?php echo $jsn->kepala_jurusan ?></td>
          
          <!-- Aksi Detail -->
          <td>
            <a href="<?php echo site_url('jurusan/detail/'.$jsn->id_jurusan); ?>" class="btn btn-success btn-sm">
              <i class="fa fa-search-plus"></i>
            </a>
          </td>

          <!-- Aksi Edit -->
          <td>
            <a href="<?php echo site_url('jurusan/edit/'.$jsn->id_jurusan); ?>" class="btn btn-primary btn-sm">
              <i class="fa fa-edit"></i>
            </a>
          </td>

          <!-- Aksi Hapus -->
          <td>
            <a href="<?php echo site_url('JurusanController/hapus/'.$jsn->id_jurusan); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?');">
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
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT JURUSAN</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- CRUD Form Modal -->
        <div class="modal-body">
          <?php echo form_open_multipart('JurusanController/tambah_aksi'); ?>

            <div class="form-group">
              <label for="nama_jurusan">Nama Jurusan</label>
              <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" placeholder="Masukkan Nama Jurusan" required>
            </div>

            <div class="form-group">
              <label for="kepala_jurusan">Nama Kepala Jurusan</label>
              <input type="text" name="kepala_jurusan" id="kepala_jurusan" class="form-control" placeholder="Masukkan Nama Kepala Jurusan" required>
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


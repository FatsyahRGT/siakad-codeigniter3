<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <h1>
      Jadwal Kuliah
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Jadwal Kuliah</li>
    </ol>
  </section>

  <!-- Content Section -->
  <section class="content">
    <!-- Tombol untuk membuka modal form tambah data -->
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah Jadwal
    </button>

    <!-- Table Index View Menampilkan data jadwal kuliah -->
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>NAMA MATA KULIAH</th>
          <th>NAMA DOSEN</th>
          <th>JURUSAN</th>
          <th>HARI</th>
          <th>TANGGAL</th>
          <th>WAKTU</th>
          <th>RUANG</th>
          <th>SEMESTER</th>
          <th colspan="3">AKSI</th> 
        </tr>
      </thead>  
      <tbody>
        <?php $no = 1; foreach ($jadwal as $jdw): ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $jdw->nama_matkul ?></td>
          <td><?php echo $jdw->nama_dosen ?></td>
          <td><?php echo $jdw->nama_jurusan ?></td>
          <td><?php echo $jdw->hari ?></td>
          <td><?php echo $jdw->tanggal ?></td>
          <td><?php echo $jdw->waktu_mulai . ' - ' . $jdw->waktu_selesai ?></td>
          <td><?php echo $jdw->ruang ?></td>
          <td><?php echo $jdw->semester ?></td>

          <!-- Aksi Detail -->
          <td>
            <a href="<?php echo site_url('JadwalController/detail/'.$jdw->id_jadwal); ?>" class="btn btn-success btn-sm">
              <i class="fa fa-search-plus"></i>
            </a>
          </td>

          <!-- Aksi Edit -->
          <td>
            <a href="<?php echo site_url('JadwalController/edit/'.$jdw->id_jadwal); ?>" class="btn btn-primary btn-sm">
              <i class="fa fa-edit"></i>
            </a>
          </td>

          <!-- Aksi Hapus -->
          <td>
            <a href="<?php echo site_url('JadwalController/hapus/'.$jdw->id_jadwal); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?');">
              <i class="fa fa-trash"></i>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>

  <!-- Modal Form Input Data Jadwal Kuliah -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT JADWAL KULIAH</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- CRUD Form Modal -->
        <div class="modal-body">
          <?php echo form_open_multipart('JadwalController/tambah_aksi'); ?>

            <div class="form-group">
              <label for="id_matkul">Mata Kuliah</label>
              <select name="id_matkul" id="id_matkul" class="form-control" required>
                <!-- Pilihan mata kuliah -->
              </select>
            </div>

            <div class="form-group">
              <label for="id_dosen">Dosen</label>
              <select name="id_dosen" id="id_dosen" class="form-control" required>
                <!-- Pilihan dosen -->
              </select>
            </div>

            <div class="form-group">
              <label for="id_jurusan">Jurusan</label>
              <select name="id_jurusan" id="id_jurusan" class="form-control" required>
                <!-- Pilihan jurusan -->
              </select>
            </div>

            <div class="form-group">
              <label for="hari">Hari</label>
              <input type="text" name="hari" id="hari" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="waktu_mulai">Waktu Mulai</label>
              <input type="time" name="waktu_mulai" id="waktu_mulai" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="waktu_selesai">Waktu Selesai</label>
              <input type="time" name="waktu_selesai" id="waktu_selesai" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="ruang">Ruang</label>
              <input type="text" name="ruang" id="ruang" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="semester">Semester</label>
              <input type="number" name="semester" id="semester" class="form-control" required>
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

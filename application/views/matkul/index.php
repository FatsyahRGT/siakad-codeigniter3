<div class="content-wrapper">
  <!-- Header -->
  <section class="content-header">
    <h1>Mata Kuliah</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Mata Kuliah</li>
    </ol>
  </section>

  <!-- Content Section -->
  <section class="content">
    <!-- Tombol untuk membuka modal form tambah data -->
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-plus"></i> Tambah Mata Kuliah
    </button>

    <!-- Table Index View Menampilkan data mata kuliah -->
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>NO</th>
            <th>NAMA MATA KULIAH</th>
            <th>NAMA DOSEN</th>
            <th colspan="3">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach ($matkul as $mk): ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mk->nama_matkul ?></td>
            <td><?php echo $mk->nama_dosen ?></td>

            <!-- Aksi Detail -->
            <td>
              <a href="<?php echo site_url('matkul/detail/'.$mk->id_matkul); ?>" class="btn btn-success btn-sm">
                <i class="fa fa-search-plus"></i>
              </a>
            </td>

            <!-- Aksi Edit -->
            <td>
              <a href="<?php echo site_url('matkul/edit/'.$mk->id_matkul); ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-edit"></i>
              </a>
            </td>

            <!-- Aksi Hapus -->
            <td>
              <a href="<?php echo site_url('MatkulController/hapus/'.$mk->id_matkul); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?');">
                <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Modal Form Input Data Mata Kuliah -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT MATA KULIAH</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- CRUD Form Modal -->
        <div class="modal-body">
          <?php echo form_open_multipart('MatkulController/tambah_aksi'); ?>

            <div class="form-group">
              <label for="nama_matkul">Nama Mata Kuliah</label>
              <input type="text" name="nama_matkul" id="nama_matkul" class="form-control" placeholder="Masukkan Nama Mata Kuliah" required>
            </div>

            <div class="form-group">
              <label for="nama_dosen">Nama Dosen</label>
              <select name="nama_dosen" id="nama_dosen" class="form-control" required>
                <option value="">Pilih Dosen</option>
                <?php foreach ($dosen as $d): ?>
                  <option value="<?php echo $d->id_dosen; ?>"><?php echo $d->nama_dosen; ?></option>
                <?php endforeach; ?>
              </select>
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

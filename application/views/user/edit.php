<div class="content-wrapper">
    <section class="content">
        <h4><strong>EDIT DATA MAHASISWA</strong></h4>

        <?php echo form_open_multipart('mahasiswa/update'); ?>

        <input type="hidden" name="id_mahasiswa" value="<?php echo $mahasiswa[0]->id_mahasiswa; ?>">

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $mahasiswa[0]->nama; ?>" required>
        </div>

        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $mahasiswa[0]->nim; ?>" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?php echo $mahasiswa[0]->jurusan; ?>" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" required><?php echo $mahasiswa[0]->alamat; ?></textarea>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $mahasiswa[0]->email; ?>" required>
        </div>

        <div class="form-group">
            <label for="no_telp">No. Telepon</label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $mahasiswa[0]->no_telp; ?>" required>
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
            <?php if (!empty($mahasiswa[0]->foto) && file_exists('./assets/foto/' . $mahasiswa[0]->foto)): ?>
            <img src="<?php echo base_url('assets/foto/' . $mahasiswa[0]->foto); ?>" 
            alt="Foto Mahasiswa" 
            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
            <?php else: ?>
            <p>Foto tidak tersedia</p>
            <?php endif; ?>
        </div>

        <div class="form-group d-flex justify-content-between align-items-center">
                <button type="reset" class="btn btn-danger">Reset</button>
                <a href="<?php echo base_url('mahasiswa/index'); ?>" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>

        <?php echo form_close(); ?>
    </section>  
</div>
<div class="content-wrapper">
    <section class="content">
        <h4><strong>EDIT DATA MATA KULIAH</strong></h4>

        <?php echo form_open_multipart('matkul/update'); ?>

        <input type="hidden" name="id_matkul" value="<?php echo $matkul[0]->id_matkul; ?>">

        <div class="form-group">
            <label for="nama_matkul">Nama Mata Kuliah</label>
            <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" value="<?php echo $matkul[0]->nama_matkul; ?>" required>
        </div>

        <div class="form-group">
            <label for="nama_dosen">Nama Dosen</label>
            <select name="nama_dosen" id="nama_dosen" class="form-control" required>
                <option value="">Pilih Dosen</option>
                <?php foreach ($dosen as $d): ?>
                  <option value="<?php echo $d->id_dosen; ?>" <?php echo $d->id_dosen == $matkul[0]->nama_dosen ? 'selected' : ''; ?>>
                    <?php echo $d->nama_dosen; ?>
                  </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group d-flex justify-content-between align-items-center">
            <button type="reset" class="btn btn-danger">Reset</button>
            <a href="<?php echo base_url('matkul/index'); ?>" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>

        <?php echo form_close(); ?>
    </section>  
</div>

<div class="content-wrapper">
    <section class="content">
        <h4><strong>EDIT DATA MATA KULIAH</strong></h4>

        <?php echo form_open_multipart('matkul/update'); ?>

        <input type="hidden" name="id_matkul" value="<?php echo $matkul[0]->id_matkul; ?>">

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="nama_matkul">Nama Mata Kuliah</label>
            <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" value="<?php echo $matkul[0]->nama_matkul; ?>" required>
        </div>

        <div class="form-group">
            <label for="nama_dosen">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="<?php echo $matkul[0]->nama_dosen; ?>" required>
        </div>

        <div class="form-group d-flex justify-content-between align-items-center">
                <button type="reset" class="btn btn-danger">Reset</button>
                <a href="<?php echo base_url('matkul/index'); ?>" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>

        <?php echo form_close(); ?>
    </section>  
</div>
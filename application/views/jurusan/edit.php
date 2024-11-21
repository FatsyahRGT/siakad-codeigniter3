<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Data Jurusan</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Jurusan</li>
        </ol>
    </section>

    <section class="content">
        <?php foreach ($jurusan as $jsn): ?>
        <!-- Form menggunakan helper CodeIgniter -->
        <?php echo form_open('JurusanController/update'); ?>
        
            <!-- Input ID (Hidden) -->
            <input type="hidden" name="id" value="<?php echo $jsn->id; ?>">

            <!-- Nama Dosen -->
            <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan</label>
                <input 
                    type="text" 
                    name="nama_jurusan" 
                    id="nama_jurusan" 
                    class="form-control" 
                    value="<?php echo $jsn->nama_jurusan; ?>" 
                    placeholder="Masukkan Jurusan" 
                    required>
            </div>

            <!-- Nomor Induk Dosen -->
            <div class="form-group">
                <label for="kepala_jurusan">Nama Kepala Jurusan</label>
                <input 
                    type="text" 
                    name="kepala_jurusan" 
                    id="kepala_jurusan" 
                    class="form-control" 
                    value="<?php echo $jsn->kepala_jurusan; ?>" 
                    placeholder="Masukkan Nama Kepala Jurusan" 
                    required>
            </div>

            <!-- Tombol -->
            <div class="form-group">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        <?php echo form_close(); ?>
        <?php endforeach; ?>
    </section>
</div>

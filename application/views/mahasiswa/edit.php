<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Data Mahasiswa</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Mahasiswa</li>
        </ol>
    </section>

    <section class="content">
        <?php foreach ($mahasiswa as $mhs): ?>
        <!-- Form menggunakan helper CodeIgniter -->
        <?php echo form_open('MahasiswaController/update'); ?>
        <!-- fungsi ('MahasiswaController/update') adalah untuk mengarahkan form ke controller -->
                
            <!-- Input ID (Hidden) -->
            <input type="hidden" name="id" value="<?php echo $mhs->id; ?>">

            <!-- Nama Mahasiswa -->
            <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input 
                    type="text" 
                    name="nama" 
                    id="nama" 
                    class="form-control" 
                    value="<?php echo $mhs->nama; ?>" 
                    placeholder="Masukkan Nama Mahasiswa" 
                    required>
            </div>

            <!-- NIM -->
            <div class="form-group">
                <label for="nim">NIM</label>
                <input 
                    type="text" 
                    name="nim" 
                    id="nim" 
                    class="form-control" 
                    value="<?php echo $mhs->nim; ?>" 
                    placeholder="Masukkan NIM" 
                    required>
            </div>

            <!-- Jurusan -->
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input 
                    type="text" 
                    name="jurusan" 
                    id="jurusan" 
                    class="form-control" 
                    value="<?php echo $mhs->jurusan; ?>" 
                    placeholder="Masukkan Jurusan" 
                    required>
            </div>

            <!-- Alamat -->
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea 
                    name="alamat" 
                    id="alamat" 
                    class="form-control" 
                    placeholder="Masukkan Alamat" 
                    required><?php echo $mhs->alamat; ?></textarea>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="form-control" 
                    value="<?php echo $mhs->email; ?>" 
                    placeholder="Masukkan Email" 
                    required>
            </div>

            <!-- No Telepon -->
            <div class="form-group">
                <label for="no_telp">No Telepon</label>
                <input 
                    type="text" 
                    name="no_telp" 
                    id="no_telp" 
                    class="form-control" 
                    value="<?php echo $mhs->no_telp; ?>" 
                    placeholder="Masukkan No Telepon" 
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

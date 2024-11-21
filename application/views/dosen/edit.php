<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Data Dosen</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Dosen</li>
        </ol>
    </section>

    <section class="content">
        <?php foreach ($dosen as $dsn): ?>
        <!-- Form menggunakan helper CodeIgniter -->
        <?php echo form_open('DosenController/update'); ?>
        <!-- fungsi ('DosenController/update') adalah untuk mengarahkan form ke controller -->
                
            <!-- Input ID (Hidden) -->
            <input type="hidden" name="id" value="<?php echo $dsn->id; ?>">

            <!-- Nama Dosen -->
            <div class="form-group">
                <label for="nama_dosen">Nama Dosen</label>
                <input 
                    type="text" 
                    name="nama_dosen" 
                    id="nama_dosen" 
                    class="form-control" 
                    value="<?php echo $dsn->nama_dosen; ?>" 
                    placeholder="Masukkan Nama Dosen" 
                    required>
            </div>

            <!-- Nomor Induk Dosen -->
            <div class="form-group">
                <label for="nid">NID</label>
                <input 
                    type="text" 
                    name="nid" 
                    id="nid" 
                    class="form-control" 
                    value="<?php echo $dsn->nid; ?>" 
                    placeholder="Masukkan NID" 
                    required>
            </div>

            <!-- Gelar -->
            <div class="form-group">
                <label for="gelar">Gelar</label>
                <input 
                    type="text" 
                    name="gelar" 
                    id="gelar" 
                    class="form-control" 
                    value="<?php echo $dsn->gelar; ?>" 
                    placeholder="Masukkan Gelar" 
                    required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="form-control" 
                    value="<?php echo $dsn->email; ?>" 
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
                    value="<?php echo $dsn->no_telp; ?>" 
                    placeholder="Masukkan No Telepon" 
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
                    required><?php echo $dsn->alamat; ?></textarea>
            </div>

           <!-- Prodi -->
           <div class="form-group">
                <label for="prodi">Prodi</label>
                <input 
                    type="text" 
                    name="prodi" 
                    id="prodi" 
                    class="form-control" 
                    value="<?php echo $dsn->prodi; ?>" 
                    placeholder="Masukkan Prodi" 
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
                    value="<?php echo $dsn->jurusan; ?>" 
                    placeholder="Masukkan Jurusan" 
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

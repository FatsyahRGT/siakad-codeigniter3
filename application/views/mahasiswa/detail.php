<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA MAHASISWA</strong></h4>

        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $detail->nama; ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?php echo $detail->nim; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->tgl_lahir; ?></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><?php echo $detail->jurusan; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $detail->email; ?></td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td><?php echo $detail->no_telp; ?></td>
            </tr>
            <tr>
                <th>Foto Diri</th>
                <td>
                    <?php if (!empty($detail->foto)): ?>
                        <img src="<?php echo site_url('MahasiswaController/tampilkan_foto/' . $detail->foto); ?>" 
                             alt="Foto Mahasiswa" 
                             style="max-width: 200px; max-height: 200px;">
                    <?php else: ?>
                        <p>Foto tidak tersedia.</p>
                    <?php endif; ?>
                </td>
            </tr>
        </table>

        <a href="<?php echo base_url('mahasiswa/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>

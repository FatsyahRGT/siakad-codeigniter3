<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA USER</strong></h4>

        <table class="table">
            <tr>
                <th>Nama User</th>
                <td><?php echo $detail->username; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $detail->email; ?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo $detail->password; ?></td>
            </tr>
            
            <!-- <tr>
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
            </tr> -->
        </table>

        <a href="<?php echo base_url('mahasiswa/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>

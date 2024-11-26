<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA DOSEN</strong></h4>

        <table class="table">
            <tr>
                <th>Nama dosen</th>
                <td><?php echo $detail->nama_dosen?></td>
            </tr>
            <tr>
                <th>NID</th>
                <td><?php echo $detail->nid?></td>
            </tr>
            <tr>
                <th>Gelar</th>
                <td><?php echo $detail->gelar?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $detail->email?></td>
            </tr>
            <tr>
                <th>No Telp</th>
                <td><?php echo $detail->no_telp?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat?></td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td><?php echo $detail->prodi?></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><?php echo $detail->jurusan?></td>
            </tr>
        </table>
    
        <a href="<?php echo base_url('dosen/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>
<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA MATA KULIAH</strong></h4>

        <table class="table">
            <tr>
                <th>Nama Mata Kuliah</th>
                <td><?php echo $detail->nama_matkul; ?></td>
            </tr>
            <tr>
                <th>Nama Dosen</th>
                <td><?php echo $detail->nama_dosen; ?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('matkul/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>

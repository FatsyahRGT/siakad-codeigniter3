<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL JURUSAN</strong></h4>

        <table class="table">
            <tr>
                <th>Nama Jurusan</th>
                <td><?php echo $detail->nama_jurusan?></td>
            </tr>
            <tr>
                <th>Kepala Jurusan</th>
                <td><?php echo $detail->kepala_jurusan?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('jurusan/index'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>
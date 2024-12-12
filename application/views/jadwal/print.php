<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&nbsp;</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .kop-surat {
            text-align: center;
            margin-bottom: 20px;
        }
        .kop-surat img {
            width: 100px;
            height: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        hr.tebal {
            border: 3px solid black; /* Menambah ketebalan garis bawah */
            margin-top: 10px;
        }
        .tanda-tangan {
            margin-top: 50px;
            text-align: right;
            margin-right: 50px;
        }
        /* @media print {
            @page {
                margin: 0;
            }
        } */
    </style>
</head>
<body>
    <!-- Header Surat -->
<div class="kop-surat">
    <div style="display: flex; justify-content: flex-start; align-items: center;">
        <img src="<?= base_url('assets/img/stikom.jpeg') ?>" alt="Logo Kampus" style="width: 100px; height: auto; margin-right: 20px;">
        <div style="flex: 1; text-align: center;">
            <font size="4">Lembaga Manajemen</font><br>
            <font size="5"><b>STIKOM CIPTA KARYA INFORMATIKA</b></font><br>
            <font size="2">
                Jl. Radin Inten II No.8 5, RT.5/RW.14, Duren Sawit, Kec. Duren Sawit,<br>
                Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13440
            </font><br>
            <font size="2">
                Website: web.stikomcki.ac.id | Email: stikomcki@stikomcki.ac.id | Telepon: 021 - 8626444
            </font>
        </div>
    </div>
    <hr class="tebal">
</div>

    <!-- Isi Surat -->
    <h1 style="text-align: center;">Jadwal Kuliah</h1>
    <table>
        <tr>
            <th>NO</th>
            <th>NAMA MATA KULIAH</th>
            <th>NAMA DOSEN</th>
            <th>JURUSAN</th>
            <th>HARI</th>
            <th>TANGGAL</th>
            <th>WAKTU</th>
            <th>RUANG</th>
            <th>SEMESTER</th>
        </tr>

        <?php $no = 1; foreach ($jadwal as $jdw): ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $jdw->nama_matkul ?></td>
          <td><?php echo $jdw->nama_dosen ?></td>
          <td><?php echo $jdw->nama_jurusan ?></td>
          <td><?php echo $jdw->hari ?></td>
          <td><?php echo $jdw->tanggal ?></td>
          <td><?php echo $jdw->waktu_mulai . ' - ' . $jdw->waktu_selesai ?></td>
          <td><?php echo $jdw->ruang ?></td>
          <td><?php echo $jdw->semester ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Footer Surat -->
    <div class="tanda-tangan">
        <p>Jakarta, <?= date('d F Y') ?></p>
        <br><br><br>
        <p><b>(......................................)</b></p>
        <p><b>Yuma Akbar, M.Kom</b></p>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>

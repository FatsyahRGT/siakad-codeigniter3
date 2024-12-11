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
    </style>
</head>
<body>
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

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>


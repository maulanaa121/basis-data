<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Data</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>No Induk</th>
            <th>Nama karyawan</th>
            <th>Jabatan</th>
            <th>Gaji pokok</th>
            <th>Tunjangan</th>
        </tr>
        </thead>
        <tbody>
<?php
    include "koneksi.php";
    $no = 1;
    $ambil_data = mysqli_query($conn,'select * from karyawan,jabatan where karyawan.id_jab - jabatan.id_jab') or die(mysqli_fetch_array($conn));
    while($tampil = mysqli_fetch_array($ambil_data)){
?>
        <tr>
            <td><?= $no++;?></td>
            <td><?= $tampil['no_induk']?></td>
            <td><?= $tampil['nama']?></td>
            <td><?= $tampil['nama_jab']?></td>
            <td><?= $tampil['gaji_pokok']?></td>
            <td><?= $tampil['tunjangan']?></td>
        </tr>
        <tbody>
    <?php
    }
    ?>
    
    </table>
</div>
</body>
</html>
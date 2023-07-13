<?php  
require "functions.php";

// query sql
$sqlquery = "SELECT * FROM mahasiswa";

// make result in array using function from functions.php
$mahasiswa = startquery($sqlquery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        .capitalize {
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa Guys</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

    <?php $i = 1; foreach ( $mahasiswa as $lastresult ) : ?>
        <tr>
            <td><?=  $i ;?></td>
            <td>(ini gambar)</td>
            <td class="capitalize"><?=  $lastresult["nama"] ;?></td>
            <td><?=  $lastresult["nim"] ;?></td>
            <td class="capitalize"><?=  $lastresult["prodi"] ;?></td>
            <td><?=  $lastresult["email"] ;?></td>
            <td>
                <a href="">edit</a>
                <a href="">hapus</a>
            </td>
        </tr>
    <?php  $i++; endforeach;?>
    </table>
</body>
</html>
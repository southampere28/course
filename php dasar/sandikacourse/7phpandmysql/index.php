<?php  
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kelas";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname );
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

if( !$result ) {
    die(mysqli_error($conn));
}
echo "database connected... </br>";

// mysqli_fetch_row()   // mengembalikan nilai numerik
// mysqli_fetch_assoc() // mengembalikan nilai assossiative
// mysqli_fetch_array() // mengembalikan keduanya, jadi datanya 2 kali lebih banyak
// mysqli_fetch_object()// mengembalikan object
                        // contoh => var_dump($object->name)

// while ( $lastresult = mysqli_fetch_assoc($result) ) {
    // var_dump($lastresult["nim"]);
//     var_dump($lastresult);
// }
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

    <?php $i = 1; while ($lastresult = mysqli_fetch_assoc($result)) : ?>
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
    <?php  $i++; endwhile;?>
    </table>
</body>
</html>
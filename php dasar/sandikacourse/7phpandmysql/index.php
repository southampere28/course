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
echo "database connected";
;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>1</td>
            <td>(ini gambar)</td>
            <td>Pramudya Putra</td>
            <td>E41222181</td>
            <td>Teknik Informatika</td>
            <td>pramudyap333@gmail.com</td>
        </tr>
    </table>
</body>
</html>
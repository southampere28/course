<?php
// session_start();
include "koneksi.php";
$id = $_GET['id'];
// $_SESSION['passid'] = $id;

if($connection -> connect_error){
    die("koneksi gagal : " . $connection->connect_error);
}
echo "koneksi berhasil </br>";

$sql = "SELECT * FROM `projectscrum` WHERE id='$id'";
$result = $connection->query($sql);
if ($result == false){
    die("tidak ada data yang perlu ditambpilkan");
}
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<html>
    <head>
        <title>
            edit php
        </title>
    </head>

    <body>
        <form method="POST" action="update.php?id=<?php echo $id ;?>">
            <label name="nama">nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo $row['name'];?>"><br>
            <label name="email">email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email'];?>"><br>
            <label name="address">address</label>
            <input type="text" name="address" id="address" value="<?php echo $row['address'];?>"><br>
            <label name="role">role</label>
            <input type="text" name="role" id="role" value="<?php echo $row['role'];?>"><br>
            <button type="submit" name="submit">update</button>
        </form>
    </body>
</html>
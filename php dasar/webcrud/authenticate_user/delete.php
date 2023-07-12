<?php
include "../koneksi.php";
$id = $_GET['id'];

if ($connection->connect_error){
    die("tidak dapat terkoneksi, error : " . $connection->connect_error);
}
// echo "database terkoneksi </br>";

$sql = "DELETE FROM `projectscrum` WHERE id = '$id'";
$result = $connection->query($sql);

if($result == true){
    // echo "data terhapus";
}else{
    die("tidak dapat menghapus data, error : " . $connection->error);
}

$connection->close();
header("Location: showdatarow.php");

?>
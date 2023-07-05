<?php
include "koneksi.php";
$id = $_GET['id'];

if($connection->connect_error){
    die("koneksi gagal : " . $connection->connect_error);
}
echo "koneksi sukses";

$postnama = $_POST['nama'];
$postemail = $_POST['email'];
$postaddr = $_POST['address'];
$postrole = $_POST['role'];

$sql = "UPDATE `projectscrum` SET `name` = '$postnama', email = '$postemail', `address` = '$postaddr', `role` = '$postrole' WHERE id = '$id'";
$result = $connection->query($sql);
if($result == true){
    echo "update berhasil";
}else{
    echo "update gagal" . $connection->error;
}
// $connection->close();
header("Location: showdatarow.php");
// exit();
?>
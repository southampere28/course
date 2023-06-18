<?php
  session_start();

  include "koneksi.php";
  if($connection -> connect_error){
    die("connect error : " . $connection->connect_error);
  }
  echo "koneksi berhasil... </br>";

  $_getnama = $_POST["nama"];
  $_getemail = $_POST["email"];
  $_getalamat = $_POST["alamat"];
  $_getrole = $_POST["role"];

  $sql = "INSERT INTO `projectscrum`(`name`, `email`, `address`, `role`) VALUES ('$_getnama','$_getemail','$_getalamat','$_getrole')";
  if($connection -> query($sql) === TRUE){
    // echo "data baru telah di tambahkan...";
    $_SESSION["notification"] = "Data berhasil di simpan!";
  }else{
    echo "Error : " . $connection->error;
  }
  $connection->close();

  header("Location: input.php");
  exit();
?>
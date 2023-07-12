<?php
// variable scope
// $x = 10;

// function tampil(){
//     global $x;  // variable global
//     echo $x;
// }
// tampil();

// variabel super global
// echo "Server Name => " . $_SERVER["SERVER_NAME"];

$_GET["nama"] = "pramudya";
$_GET["nim"] = "E41222181";

// you can add some value to url => localhost/folder/file.php?<name>=<value>&<name2>=<value>
var_dump($_GET);
?>
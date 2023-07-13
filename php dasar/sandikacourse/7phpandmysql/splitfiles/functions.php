<?php  
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kelas";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname );

if ( !$conn ) {
    die("error : " . mysqli_error($conn));
}

function startquery($query) {
    global $conn;
    $rows = [];

    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>
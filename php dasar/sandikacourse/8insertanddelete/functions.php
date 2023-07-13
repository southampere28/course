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

function tambah($data) {
    global $conn;

    // catch value from post
    $namamhs = htmlspecialchars($data["namamhs"]);
    $nimmhs = htmlspecialchars($data["nimmhs"]);
    $emailmhs = htmlspecialchars($data["emailmhs"]);
    $prodimhs = htmlspecialchars($data["prodimhs"]);
    $gambarmhs = htmlspecialchars($data["gambarmhs"]);

    // query sql
    $query = "INSERT INTO mahasiswa VALUES ('', '$namamhs', '$nimmhs', '$emailmhs', '$prodimhs', '$gambarmhs')";

    // execute sql
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
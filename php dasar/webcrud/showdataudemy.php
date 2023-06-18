<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "kelas";

$conn = new mysqli($server, $user, $password, $dbname);

if($conn->connect_error){
    die("koneksi gagal : " . $conn->connect_error);
}else{
    echo "koneksi berhasil";
}

$sql = "SELECT * FROM projectscrum";
$ress = $conn->query($sql);

$num_result = $ress->num_rows;
$num_field = $ress->field_count;

echo "<table border = '1'>";

// show field column name;
echo "<tr>";
for($i=0; $i < $num_field; $i++){
    $getcol = $ress->fetch_field();
    echo "<td> <b>". $getcol->name . "</b> </td>";
}
echo "</tr>";

// show data row
for ($j=0; $j < $num_result; $j++){
    // $byrow = mysqli_fetch_row($ress);    --> this can use too seem like as below
    $byrow = $ress->fetch_row();
    echo "<tr>";
        for($k=0; $k < $num_field; $k++){
            echo "<td>" . $byrow[$k] . "</td>";
        }
    echo "</tr>";
}
echo "</table>";
echo "jumlah data row yang terekam : " . $num_result . "</br>";
echo "jumlah field column : " . $num_field;
$conn->close();
?>
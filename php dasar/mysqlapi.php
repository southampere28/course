<!doctype html>
<html lang="en">
  <head>
    <title>belajar php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container ml-2 mt-3 text-center">
            <h3>tabel list mahasiswa polije psdku nganjuk TIF'22</h3>
        </div>
      <?php 
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $database = "kelas";
        
        $koneksi = new mysqli($dbhost, $dbuser, $dbpass, $database);

        if ($koneksi->connect_error) {
            die("Koneksi gagal: " . $koneksi->connect_error);
        }
        // echo "koneksi berhasil";

        $query = "SELECT * FROM siswa";
        $result = $koneksi->query($query);
        
        if ($result) {

            echo "<div class='container ml-2 mt-3 pl-0 pr-0 pt-0 pb-0'>";
            echo "<table class='table table-striped table-bordered'>";
            echo "<thead>";
            echo "<tr> <th scope='col'>#</th> <th scope='col'>Nama</th> <th scope='col'>Kelas</th> <th scope='col'>Keterangan</th>
                </tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                // echo $row['nama'] . "</br>";
                echo "<tr>";
                echo "<th scope:'row'>" . $row['id'] . "</th>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['kelas'] . "</td>";
                echo "<td> (None) </td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "Error: " . $koneksi->error;
        }
        
        $koneksi->close();
    ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

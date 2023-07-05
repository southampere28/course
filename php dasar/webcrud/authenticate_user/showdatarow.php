<!doctype html>
<html lang="en">
  <head>
    <title>belajar php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  </head>
  <body class="gradient-bg">
        <div class="container mt-3 mb-3 text-center contentTitle">
          <h2><b>tabel list member of concealed project</b></h2>
          </div>
      <?php 
        include "koneksi.php";

        if ($connection->connect_error) {
            die("Koneksi gagal: " . $connection->connect_error);
        }
        // echo "koneksi berhasil";

        $query = "SELECT * FROM projectscrum";
        $result = $connection->query($query);
        ?>
        <?php
        if ($result) { ?>

            <div class='container' id="data-content">
            <table class='table table-striped table-bordered bg-light'>
            <thead>
            <tr class="text-center"> 
              <th scope='col'>#</th> 
              <th scope='col'>Nama</th> 
              <th scope='col'>Email</th> 
              <th scope='col'>Address</th>
              <th scope='col'>Role</th>
              <th scope='col' id="maks-content">Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php while ($row = $result->fetch_assoc()) { ?>
                  <tr>
                  <th scope='row'><?php echo $row['id']; ?></th>
                  <td><?php echo $row['name']; ?> </td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['address'];?></td>
                  <td><?php echo $row['role'];?></td>
                  <td><a class="btn btn-sm btn-primary border border-dark shadow" href="edit.php?id=<?php echo $row['id']; ?>">edit </a>
                  <a class="btn btn-sm btn-danger border border-dark shadow ml-1" href="delete.php?id=<?php echo $row['id']; ?>"> delete</a></td>
                  </tr>
              <?php } ?>
            </tbody>
            </table>
            </div>

        <?php } else { ?>
            <?php echo "Error: " . $connection->error; ?>
        <?php } ?> 
        <?php
        $connection->close();
    ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

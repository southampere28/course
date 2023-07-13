<?php  
include "functions.php";

if (isset($_POST["submit"])){
    
    if(tambah($_POST) > 0){
        echo "<script>
            alert('data berhasil ditambahkan !');
            document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "<script>
            alert('penginputan data gagal !');
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Data Baru</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <style>
        body{
            background-color: brown;
        }
        #form-container{
            background-color: gray;
        }
    </style>
    
    </head>
  <body>
    <div class="container mt-2 ml-1 pt-3 pb-3" id="form-container">

        <form class="bg-light pl-2 pr-2 pb-3" autocomplete="off" action="" method="POST">
        <h1>Form Data Mahasiswa</h1>
        <div class="form-group">
          <label for="namamhs">Nama <span class="text-danger">*</span></label>
          <input type="text" name="namamhs" id="namamhs" class="form-control" placeholder="" spellcheck="false" aria-describedby="helpId" required>
        </div>
        <div class="form-group">
            <label for="emailmhs">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name= "emailmhs" id="emailmhs" aria-describedby="emailHelp" placeholder="" spellcheck="false">
        </div>
        <div class="form-group">
          <label for="nimmhs">NIM <span class="text-danger">*</span></label>
          <input type="text" name="nimmhs" id="nimmhs" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Ex: E12345678</small>
        </div>
        <div class="form-group">
          <label for="prodimhs">prodi <span class="text-danger">*</span></label>
          <input type="text" name="prodimhs" id="prodimhs" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Ex: Manajemen Agribisnis</small>
        </div>
        <div class="form-group">
          <label for="gambarmhs">gambar <span class="text-danger">*</span></label>
          <input type="text" name="gambarmhs" id="gambarmhs" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Ex: namakamu.jpg</small>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
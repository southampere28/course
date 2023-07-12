<?php 
if(!isset($_GET['nama']) || !isset($_GET['penulis'])){
    header("Location: test.php");
    exit;
}
?>
<html lang="en">
  <head>
    <title>Book Recomendation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        img {
            height: 160px; 
        }
        #contentimg {
            padding: 10px;
            
        }
        #description {
            padding: 20px;
        }
    </style>
</head>
  <body>
    <div class="container-fluid mt-3 ml-2">
        <div class="row mb-2">
            <div class="col-sm-3 bg-primary" id="contentimg">
                <img src="../../webcrud/asset/<?=$_GET["gambar"]?>" alt="cover book">
            </div>
            <div class="col-sm-6 bg-light" id="description">
                <ul>
                    <li>Nama : <?= $_GET["nama"]; ?></li>
                    <li>Kategori : <?= $_GET["kategori"]; ?></li>
                    <li>Tahun : <?= $_GET["tahun"]; ?></li>
                    <li>Penulis : <?= $_GET["penulis"]; ?></li>
                    <li>Jumlah Halaman : <?= $_GET["hal"]; ?></li>
                </ul>
            </div>
        </div>
    </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
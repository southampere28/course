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
    <?php 
    $books = [
        [
            "nama" => "Vintage Tales",
            "tahun" => "2001",
            "penulis" => "marcus victus",
            "hal" => 200,
            "kategori" => "(fiksi) novel",
            "gambar" => "coverbook1.jpg"
        ],
        [
            "nama" => "Crack The Code",
            "tahun" => "2002",
            "penulis" => "alexander michael",
            "hal" => 176,
            "kategori" => "(non-fiksi) pemrograman",
            "gambar" => "coverbook2.jpeg"
        ]
    ]; 
    ?>
    <div class="container-fluid mt-3 ml-2">
        <?php foreach ($books as $bks) : ?>
            <div class="row mb-2">
                <div class="col-sm-3 bg-primary" id="contentimg">
                    <img src="../webcrud/asset/<?=$bks["gambar"]?>" alt="cover book">
                </div>
                <div class="col-sm-6 bg-light" id="description">
                    <ul>
                        <li>Nama : <?= $bks["nama"]; ?></li>
                        <li>Kategori : <?= $bks["kategori"]; ?></li>
                        <li>Tahun : <?= $bks["tahun"]; ?></li>
                        <li>Penulis : <?= $bks["penulis"]; ?></li>
                        <li>Jumlah Halaman : <?= $bks["hal"]; ?></li>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
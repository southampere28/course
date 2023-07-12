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
    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get ~ PHP</title>

    <style>
        img {
            height: 160px;
        }
    </style>
</head>
<body>
    <?php foreach ($books as $bks) : ?>
        <ul>
            <li><a href="latgetuser.php?nama=<?=$bks["nama"]?>&tahun=<?=$bks["tahun"]?>
            &penulis=<?=$bks["penulis"]?>&hal=<?=$bks["hal"]?>&gambar=<?=$bks["gambar"]?>
            &kategori=<?=$bks["kategori"]?>">
            <?=  $bks["nama"] ?></a></li>
        </ul>    
    <?php endforeach; ?>
</body>
</html>
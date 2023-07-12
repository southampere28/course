<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Mahasiswa</title>
    <style>
        .tab {
        display: inline-block;
        margin-left: 4em;
        }
    </style>
</head>
<body>
    <?php 
        $datamhs = [["Pramudya Putra", "E41222181", "Informatic Engineering", "pramudyap333@gmail.com"],
        ["Syafrizal wd Mahendra", "E41554103", "Informatic Engineering", "mahennekers@gmail.com"],
        ["Muhimul Ulya", "D31554103", "Agricultural Management", "yayakguys@gmail.com"]];
    ?>
    
    <h1>Data Mahasiswa Polije PSDKU Nganjuk</h1>
    <?php foreach ($datamhs as $dtm) :?>
        <ul>
            <li><?="nama <span class='tab'>:</span> " . $dtm[0]?></li>
            <li><?="NIM <span class='tab'>:</span> " . $dtm[1]?></li>
            <li><?="prodi <span class='tab'>:</span> " . $dtm[2]?></li>
            <li><?="email <span class='tab'>:</span> " . $dtm[3]?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>
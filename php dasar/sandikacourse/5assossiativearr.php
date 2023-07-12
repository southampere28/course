<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assossiative Array</title>

    <style>
        @keyframes spin {
            0%{transform: rotate(0deg); border-radius: 0%;}
            50%{border-radius: 50%;}
            100%{transform: rotate(360deg); border-radius: 0%;}
        }
        .square {
            width: 50px;
            height: 50px;
            background-color: cornsilk;
            border: solid black 1px;
            margin: 3px;
            float: left;
            text-align: center;
            line-height: 50px;
        }
        .square:hover {
            animation: spin 2s linear infinite;
        }
        .clear {
            clear : both;
        }
    </style>

</head>
<body>
    <?php 
    $nums = [[1,2,3],[4,5,6],[7,8,9],[10,11,12],[13,14,15,16]];
    ?>

    <div class="square"> <?= $nums[2][0] ?> </div>
    <div class="square"> <?= count($nums) ?> </div>
    <div class="square"> <?= count($nums[1]) ?> </div>
    <div class="clear"></div>
    
    <br><br>
    <h2>Using For Loop</h2>
    <?php for($i=0; $i<count($nums); $i++) { ?>
        <?php for($j=0; $j<count($nums[$i]); $j++) { ?>
            <div class="square"><?= $nums[$i][$j] ?></div>
        <?php } ?>
        <div class="clear"></div>
        <!-- <br> -->
    <?php } ?>
    
    <h2>Using Foreach</h2>
    <?php foreach ($nums as $nm): ?>
        <?php foreach ($nm as $nu) { ?>    
            <div class="square"><?= $nu ?></div>
        <?php } ?>
        <div class="clear"></div>
    <?php endforeach; ?>

    <br><br>
    <h2>associative array</h2>
    <?php 
        // this is array associative
        $datamhs = [
            "nama" => "Pramudya Putra",
            "nim" => "E41222181",
            "prodi" => "Teknik Informatika",
            "email" => "e41222181@student.polije.ac.id"
        ];

        $datamhs2 = [
            [
                "nama" => "Pramudya Putra",
                "nim" => "E41222181",
                "prodi" => "Teknik Informatika",
                "email" => "e41222181@student.polije.ac.id",
                "foto" => "rocket2resize.png"
            ],
            [
                "nama" => "Akbar Rangga",
                "email" => "makbarrangga21@gmail.com",
                "nim" => "F41223171",
                "prodi" => "Teknik Industri",
                "nilaitugas" => [70, 83, 90],
                "foto" => "rocket_resize.png"
            ]
        ];
    ?>
    <h3>array single dimension</h3>
    <?php var_dump($datamhs) ?>
    <div><?php echo "email = " . $datamhs["email"]; ?></div>
    
    <h3>array multidimension</h3>
    <?php var_dump($datamhs2) ?>
    <div> <?= $datamhs2[1]["email"] ?> </div>
    <div> <?= $datamhs2[1]["nilaitugas"][2] ?> </div>

    <h3>data implementation</h3>
    <?php 
    $i = 0;
    foreach ($datamhs2 as $dtmhs) : 
          $i++
    ?>
    <h3><?= "Mahasiswa ke-" . $i ?></h3>
    <ul>
        <li> <img src="../webcrud/asset/<?=$dtmhs["foto"];?>" alt="gambar mhs"> </li>
        <li> <?= "nama : " . $dtmhs["nama"] ?> </li>
        <li> <?= "nim : " . $dtmhs["nim"] ?> </li>
        <li> <?= "prodi : " . $dtmhs["prodi"] ?> </li>
        <li> <?= "email : " . $dtmhs["email"] ?> </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
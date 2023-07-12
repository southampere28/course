<?php $num = [12, 10, 7, 9, 13, 2, 3, 1] ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>

    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: orange;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{clear : both};
    </style>
</head>
<body>
    <?php for($i=0; $i < count($num); $i++){ ?>
        <div class="kotak"><?= $num[$i] ?></div>
    <?php } ?>
    
    <div class="clear"></div>

    <?php foreach($num as $a) { ?>
        <div class= "kotak"><?php echo $a?></div>
    <?php } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    <?php
        // old method
        $theday = array("Senin", "Selasa", "Rabu");

        // new method
        $themonth = ["January", "February", "March"];
        // in the php value of array can mixed like string, numeric, and boolean
        $arr1 = ["this is string", 1, true];

        // print array (var_dump() or print_r())
        var_dump($theday);
        echo "</br>";
        print_r($themonth);
        echo "</br>";

        // print just 1 element from array
        echo $theday[1];
    ?>
</body>
</html>
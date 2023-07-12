<html>
    <head>
        <title>
            decision making ~ php
        </title>
    </head>
    
    <body>
        <?php
        // ===== if else statement ======
        // $x = rand(1,100);
        // echo "Random number is $x </br>";
        // if ($x < 25)
        //     echo "details ==> number less than 25";
        // else if ($x <= 50)
        //     echo "details ==> number between 25 - 50";
        // else
        //     echo "details ==> number greater than 50";

        // ======= switch case statement ========
        $x = rand(1,10);
        $y = rand(1,10);
        $z = rand(1,4);

        echo "number : $x, $y operation code: $z";
        echo "</br>";
        switch($z){
            // tambah
            case 1: $op = $x + $y; break;
            // kurang
            case 2: $op = $x - $y; break;
            // kali
            case 3: $op = $x * $y; break;
            // bagi
            case 4: $op = $x / $y; break;
            default: $op = "nothing to display";
        }

        echo "result - $op";

        ?>
    </body>
</html>
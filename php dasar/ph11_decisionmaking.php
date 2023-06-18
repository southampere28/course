<html>
    <head>
        <title>
            decision making ~ php
        </title>
    </head>
    
    <body>
        <?php
        $x = rand(1,100);
        echo "Random number is $x </br>";
        if ($x < 25)
            echo "details ==> number less than 25";
        else if ($x <= 50)
            echo "details ==> number between 25 - 50";
        else
            echo "details ==> number greater than 50";

        ?>
    </body>
</html>
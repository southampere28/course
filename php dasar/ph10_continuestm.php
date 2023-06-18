<html>
    <head><title>continue statement ~ php</title></head>

    <body>
       <?php
        $y=0;
        while($y < 10){
            
            ++$y;
            $x = rand(1,10);
                if($x==5) continue;
            echo "random number : $y val : $x </br>";
        }
       ?> 
    </body>

</html>
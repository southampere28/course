<html>
    <head>
        <title>function ~ php</title>
    </head>

    <body>
        <?php

            // function swap(&$x, &$y){ // tanda & merupakan referensi variabel...
            //     $t = $x;
            //     $x = $y;
            //     $y = $t;
            // }
            // $a = 10; $b = 20;
            // echo "sebelum di tukar a = $a || b = $b </br>";
            // swap($a, $b);
            // echo "setelah di tukar a = $a || b = $b";


            // function percentage($p, $c, $m, $ttl=300){
            //     echo "p-$p, c-$c, m-$m, ttl-$ttl</br>";
            //     $percent = ($p + $c + $m) * 100/$ttl;
            //     echo "percentage is $percent </br>";
            // }
            // percentage(50,60,70);
            // percentage(25,30,35,100);


            // function average(){
            //     $sum = 0;
            //     $args = func_get_args();
            //     print_r($args);
            //     $count = func_num_args();
            //     echo "$count";
            //     for ($i = 0; $i < $count; $i++){
            //         $sum += $args[$i];
            //     }
            //     $result = $sum / $count;
            //     echo "hasil rata rata adalah $result";
            // }

            // average(10,20,30,40);


            function average(){
                $sum = 0;
                $args = func_get_args();
                // print_r($args);
                $count = func_num_args();
                // echo "$count";
                for ($i = 0; $i < $count; $i++){
                    $sum += $args[$i];
                }
                $result = $sum / $count;
                return $result;
            }
            $prntresult = average(10,20,30,40);
            echo "hasil rata rata => $prntresult";



        ?>
    </body>
</html>
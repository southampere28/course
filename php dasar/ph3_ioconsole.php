<?php
    print("masukkan tinggi:");
    fscanf(STDIN, "%d", $a);
    echo("masukkan lebar:");
    fscanf(STDIN, "%d", $b);
    $c = $a * $b;
    fprintf(STDOUT, "luas=%d", $c);
?>
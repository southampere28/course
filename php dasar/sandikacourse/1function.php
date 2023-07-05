<?php
    date_default_timezone_set('Asia/Jakarta');
    function dayornight() {
        $hour = date('H');
        $dayTerm = ($hour > 19) ? "Night" : (($hour > 17) ? "Evening" : (($hour > 11) ? "Afternoon" : "Morning"));
        return $dayTerm;
    }
    function sapa($waktu = "Siang", $nama = "Admin") { // using '$function = default' for make default if parameter empty
        return "Good $waktu, Halo $nama";
    }
    function tanggal() {
        return date("l, j F Y");
    }
    function startserver() {
        $startnow = "aaa";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Function</title>
</head>
<body>
    <h3> <?= tanggal() ?> </h3>
    <h1> <?= sapa(dayornight(), "Putra") ?> </h1> <!-- u can use echo too -->

    <?php
    $specificDate = '2023-04-05 12:00:00';

    // Calculate the difference between the current date and the specific date
    $birthdate = new DateTime($specificDate);
    $currentDate = new DateTime();
    $diff = $birthdate->diff($currentDate);

    // Format the lifetime in clock format
    $lifetime = $diff->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');

    // Output the lifetime
    echo $lifetime;
    ?>
</body>
</html>
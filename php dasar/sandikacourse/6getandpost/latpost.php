<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post ~ PHP</title>
</head>
<body>
    <?php if(isset($_POST["nama"])) { ?>
        <h1>Selamat Datang! Halo <?=  $_POST["nama"] ;?></h1>
    <?php };?>
    <form action="" method="post">
        <title>nama :</title><br>
        <input type="text" name="nama" required>
        <input type="submit">
    </form>
</body>
</html>
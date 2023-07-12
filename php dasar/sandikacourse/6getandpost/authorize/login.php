<?php
// checking the submit button have been clicked 
if (isset($_POST["submit"])){

    // check the username and password is true or not
    if (($_POST["username"] == "admin") && ($_POST["password"] == "123456")) {
        header("Location: admin.php");
        exit;
    }
    else{
        // if username or password wrong, this statement will run
        $error = true;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>
    <form action="" method="POST">
        <label for="username">username</label>
        <input type="text" name="username" id="username" autocomplete="off"><br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="login" name="submit"><br>
        <?php if (isset($error)) : ?>
            <p style="color: red">username atau password salah</p>
        <?php endif;
        // $error = null;?>
    </form>
</body>
</html>
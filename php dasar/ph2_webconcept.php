<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><b>Client side and Server side</b></p>
    <script type="text/javascript">
            document.write("Client's date : " + Date() + "</br>");
    </script>
    <?php
        date_default_timezone_set("Asia/Tokyo");
        echo "Tokyo, Japan Timezone </br>";
        echo "server's date is " . date("Y-m-d");
        echo " The time is " . date("h:i:s a");
    ?>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $_SESSION["username"] = "Kiranpal Singh";
    echo $_SESSION["username"];
    ?>
    <br>
    <a href="land-page.php"> Visit second page </a>
</body>

</html>
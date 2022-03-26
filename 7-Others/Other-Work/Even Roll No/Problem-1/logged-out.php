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
    session_unset();
    session_destroy();
    if (isset($_POST["submit"])) {
        echo "Your session is unset and destroyed!!! <br>";
    }
    ?>
</body>

</html>
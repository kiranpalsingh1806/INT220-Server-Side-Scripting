<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {
        echo "Welcome to our site !!! <br>";
        $full_name = $_POST["fullname"];

        $_SESSION["username"]  = $full_name;
        echo "Your session is set :) <br> ";
    }
    ?>
    <form action="destroy-page.php" method="post">
        <input type="submit" value="Destroy Session" name="submit">
    </form>
</body>

</html>
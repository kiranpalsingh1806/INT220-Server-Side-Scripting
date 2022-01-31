<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing....</title>
</head>

<body>

    <?php
    function welcome($username, $password)
    {
        if ($username == "admin" && $password == "admin") {
            echo "You are admin. Welcome Kiranpal Singh" . "<br>";
        } else {
            echo "Welcome $username !! You are our regular visitor." . '<br>';
        }
    }

    welcome("admin", "admin");
    welcome("Raman", "12345");
    ?>

</body>

</html>
<?php

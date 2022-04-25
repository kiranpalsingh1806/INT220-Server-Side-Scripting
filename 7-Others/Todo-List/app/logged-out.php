<?php
session_start();
?>
<?php
$cookie_name = "username";
$cookie_value = $_COOKIE[$cookie_name];
setcookie($cookie_name, $cookie_value, time() - (60 * 60), "/");
$cookie_name = "password";
$cookie_value = $_COOKIE[$cookie_name];
setcookie($cookie_name, $cookie_value, time() - (60 * 60), "/");
$cookie_name = "email";
$cookie_value = $_COOKIE[$cookie_name];
setcookie($cookie_name, $cookie_value, time() - (60 * 60), "/");
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
    ?>
</body>

</html>
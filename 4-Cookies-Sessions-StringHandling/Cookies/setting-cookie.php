<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Kiranpal";
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");
?>
<html>

<body>
    <h4>Setting Cookies in PHP</h4>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>
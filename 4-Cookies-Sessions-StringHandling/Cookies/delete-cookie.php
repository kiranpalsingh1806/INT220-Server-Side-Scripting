<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Kiranpal";
setcookie($cookie_name, $cookie_value, time() - 1, "/");
?>
<html>

<body>
    <h4>Deleting Cookies in PHP</h4>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is deleted!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>
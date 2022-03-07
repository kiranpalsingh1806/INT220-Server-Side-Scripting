<?php
$cookie_name1 = "full-name";
$cookie_name2 = "user-age";
$cookie_name = $_GET["name"];
$cookie_age =  $_GET["age"];
setcookie($cookie_name1, $cookie_value, time() + (60 * 60), "/");
setcookie($cookie_name2, $cookie_value, time() + (60 * 60), "/");
?>
<html>
<style>

</style>

<body>

    <body>
        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            for ($x = 0; $x <= 10; $x++) {
                echo "Advertisement $x of : " . $_COOKIE[$cookie_name];
                echo "<br>";
            }
        }
        ?>
    </body>
</body>

</html>
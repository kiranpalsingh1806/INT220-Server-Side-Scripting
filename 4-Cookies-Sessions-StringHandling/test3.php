<?php
$cookie_name = "product";
$cookie_value =  $_GET["product-name"];
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");
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
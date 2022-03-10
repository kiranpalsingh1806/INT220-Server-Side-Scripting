<html>

<body>
    <?php
    if (!isset($_COOKIE["full-name"])) {
        echo "Cookie are not set";
    } else {
        echo "Name  : " . $_COOKIE["full-name"];
        echo "<br>";
        echo "Age  : " . $_COOKIE["user-age"];
        echo "<br>";
    }
    ?>
</body>

</html>
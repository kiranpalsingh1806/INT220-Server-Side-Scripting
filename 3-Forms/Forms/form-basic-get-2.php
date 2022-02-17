<html>

<body>

    Welcome <?php echo $_GET["fname"];
            echo " " . $_GET["lname"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>
    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    ?>
</body>

</html>
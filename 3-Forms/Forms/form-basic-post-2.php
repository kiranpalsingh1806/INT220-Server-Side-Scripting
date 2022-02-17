<html>

<body>

    Welcome <?php echo $_POST["fname"];
            echo " " . $_POST["lname"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
    <?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    ?>
</body>

</html>
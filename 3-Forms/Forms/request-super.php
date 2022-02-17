<!DOCTYPE HTML>
<html>

<body>
    <form action="request-super.php" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="fname">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br>
        <label for="phone">Phone:</label><br>
        <input type="number" id="phone" name="phone" value=""><br>
        <label for="pass">Password:</label><br>
        <input type="password" id="pass" name="password" value=""><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        echo $_REQUEST["fname"] . "<br>";
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    }
    ?>
</body>

</html>
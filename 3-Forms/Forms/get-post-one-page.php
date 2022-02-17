<!DOCTYPE HTML>
<html>

<body>
    <form action="get-post-one-page.php" method="get">

        <h4>GET</h4>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="fname">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br><br>
        <input type="submit" value="submit" name="submit1">
    </form>
    <form action="get-post-one-page.php" method="post">

        <h4>POST</h4>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
        <label for="fname">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br><br>
        <input type="submit" value="submit" name="submit2">
    </form>
    <?php
    if (isset($_GET["submit1"])) {
        echo $_REQUEST["fname"] . "<br>";
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    } else if (isset($_POST["submit2"])) {
        echo $_REQUEST["fname"] . "<br>";
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    }
    ?>
</body>

</html>
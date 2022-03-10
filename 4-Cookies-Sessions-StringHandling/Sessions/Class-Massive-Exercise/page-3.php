<?php include 'header.php'; ?>
<?php include 'nav-bar.php'; ?>
<?php include 'products2.php'; ?>
<?php
session_start();
?>
<?php
if (isset($_POST["submit"])) {
    echo "You are logged in successfully !!! <br>";
    $full_name = $_POST["fullname"];
    $email =  $_POST["email"];
    $mobile = $_POST["phone"];

    $_SESSION["username"]  = $full_name;
    echo "Your cookies and session are set !!!! <br> ";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="logged-out.php" method="post">
        <input type="submit" value="Log Out" name="submit">
    </form>
</body>

</html>

<?php require 'footer.php'; ?>
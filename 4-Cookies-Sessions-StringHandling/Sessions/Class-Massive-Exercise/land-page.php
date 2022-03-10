<?php include 'header.php'; ?>
<?php include 'nav-bar.php'; ?>
<?php
session_start();
?>
<?php
$cookie_name = "user";
$cookie_value = $_POST["fullname"];
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");
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
<?php require 'footer.php'; ?>
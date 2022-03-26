
<?php
session_start();
?>
<?php
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $age =  $_POST["age"];
    $password = $_POST["password"];

    if ($username == "user123@gmail.com" && $password == "password") {
        echo "You are logged in successfully !!! <br>";
        $_SESSION["username"]  = $username;
        echo "Your sessions are set !!!! <br> ";
        require 'hyperlinks.php';
    } else {
        echo "Incorrect details <br>";
        echo "Your sessions are not set <br>";
        session_unset();
        session_destroy();
        require 'hyperlinks-2.php';
    }
}
?>
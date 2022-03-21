<?php
session_start();
?>
<?php
if (isset($_POST["submit"])) {
    echo "Welcome to our site !!! <br>";
    $full_name = $_POST["fullname"];

    $_SESSION["username"]  = $full_name;
    echo "Your session is set :) <br> ";
}
?>
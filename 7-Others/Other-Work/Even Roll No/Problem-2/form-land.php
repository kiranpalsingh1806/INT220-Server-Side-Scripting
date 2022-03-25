<?php
session_start();
?>
<?php
$cookie_name = "user";
$cookie_value = $_POST["fullname"];
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");
?>
<?php
$error = false;
if (isset($_POST["submit"])) {
    $full_name = $_POST["fullname"];
    if (!preg_match("/^[a-zA-z\s]+$/", $full_name)) {
        $Err = " Error :(  Only alphabets and whitespace are allowed.";
        $error = true;
        echo "<br><br>";
        echo $Err;
    } else {
        echo "<br>";
        echo "Your name is $full_name";
    }

    $mobile = $_POST["phone"];
    if (!preg_match("/^[0-9]+$/", $mobile)) {
        $error = true;
        $Err = "<br>Only numeric value is allowed. <br>";
        echo $Err;
    } else {
        echo  "<br>Your phone number is $mobile <br>";
    }



    if (!$error) {
        echo "You are logged in successfully !!! <br>";
        $full_name = $_POST["fullname"];
        $email =  $_POST["email"];
        $mobile = $_POST["phone"];

        $_SESSION["username"]  = $full_name;
        echo "Your cookies and session are set !!!! <br> ";
    } else {
        echo "<br> <br>We have not set your cookies and sessions. This is due to invalid information provided in the form !!!";
    }
}
?>

<?php

if (!$error) { ?>
    <!DOCTYPE html>
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
<?php
}
?>
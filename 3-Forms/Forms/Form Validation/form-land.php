<?php include 'header.php'; ?>
<?php
if (isset($_POST["submit"])) {
    $full_name = $_POST["fullname"];
    if (!preg_match("/^[a-zA-z\s]+$/", $full_name)) {
        $Err = " Error :(  Only alphabets and whitespace are allowed.";
        echo "<br><br>";
        echo $Err;
    } else {
        echo "<br>";
        echo "Your name is $full_name";
    }

    $mobile = $_POST["phone"];
    if (!preg_match("/^[0-9]+$/", $mobile)) {
        $Err = "<br>Only numeric value is allowed.";
        echo $Err;
    } else {
        echo  "<br>Your phone number is $mobile";
    }
}
?>
<?php require 'footer.php'; ?>
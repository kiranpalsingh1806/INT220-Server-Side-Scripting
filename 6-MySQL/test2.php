<?php
$servername = "localhost";
$username = "root";
$password = "";

$link = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE demo";

if (mysqli_query($link, $sql)) {
    echo "Dear Kiranpal, Database has been created :)";
} else {
    echo "Try again Kiranpal, there was some error at your end" . $conn->error;
}

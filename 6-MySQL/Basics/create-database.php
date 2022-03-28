<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed  : " . $conn->connect_error);
}

$sql = "CREATE DATABASE serverSideDB";
if ($conn->query($sql) === TRUE) {
    echo "Dear Kiranpal, Database has been created :)";
} else {
    echo "Try again Kiranpal, there was some error at your end" . $conn->error;
}

$conn->close();

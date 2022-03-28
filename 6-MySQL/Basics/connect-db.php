<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Dear Kiranpal Singh,Connection failed: " . mysqli_connect_error());
}
echo "Dear Kiranpal Singh, Connected successfully";

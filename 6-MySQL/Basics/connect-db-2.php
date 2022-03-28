<?php
$servername = "localhost";
$username = "root";
$password = "";

$link = mysqli_connect($servername, $username, $password);

if ($link) {
    echo "Dear Kiranpal Singh, Connected successfully";
} else {
    echo "Dear Kiranpal Singh,Connection failed: " . mysqli_connect_error();
}

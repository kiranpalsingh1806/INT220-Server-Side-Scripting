<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

$connect = new mysqli($servername, $username, $password, $database);

$createTable = "CREATE TABLE IF NOT EXISTS p2(uid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                     fullname VARCHAR(30),
                                     location VARCHAR(30),
                                     ctc int(10),
                                     dob VARCHAR(30),
                                   email varchar(50))";

if ($connect->query($createTable)) {
    echo "Dear Kiranpal, table has been inserted :)<br>";
} else {
    echo "Try again Kiranpal, there was some error at your end" . $conn->error;
}

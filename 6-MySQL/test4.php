<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

$connect = new mysqli($servername, $username, $password, $database);

$createTable = "CREATE TABLE students(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                     name VARCHAR(30),
                                   rollno int(10),              
                                   address VARCHAR(50) )";

$insertIntoTable = "INSERT INTO students(name, rollno, address) VALUES ('Akshat Ranjan', 69, 'Gujarat')";

if ($connect->query($insertIntoTable)) {
    echo "Dear Kiranpal, Data has been inserted :)<br>";
} else {
    echo "Try again Kiranpal, there was some error at your end" . $conn->error;
}

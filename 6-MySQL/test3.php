<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

$connect1 = new mysqli($servername, $username, $password, $database);
$connect2 = mysqli_connect($servername, $username, $password, $database);

$createTable1 = "CREATE TABLE users1(name VARCHAR(30),
                                   rollno int(10),              
                                   address VARCHAR(50) )";

$createTable2 = "CREATE TABLE users2(reg_no int(10),
                                   subject varchar(30),              
                                   passout_year int(4) )";

if ($connect1->query($createTable1)) {
    echo "Dear Kiranpal, First Table has been created :)<br>";
} else {
    echo "Try again Kiranpal, there was some error at your end" . $conn->error;
}


if (mysqli_query($connect2, $createTable2)) {
    echo "Dear Kiranpal, Second Table has been created :)";
} else {
    echo "Try again Kiranpal, there was some error at your end" . $conn->error;
}

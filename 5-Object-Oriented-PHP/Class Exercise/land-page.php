<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST["submit"])) {
        echo "Result : <br>";
        $num1 = $_POST["num1"];
        $num2 =  $_POST["num2"];

        echo "Num1 = $num1 and Num2 =  $num2 <br> ";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "demo";

        $connect = new mysqli($servername, $username, $password, $database);

        $createTable = "CREATE TABLE IF NOT EXISTS numbers(
                                        num1 int(10),
                                         num2 int(10))";

        $insertIntoTable = "INSERT INTO numbers(num1, num2) VALUES ('$num1', '$num2')";

        if ($connect->query($createTable) && $connect->query($insertIntoTable)) {
            echo "Dear  , Data has been inserted :)<br>";
        } else {
            echo "Try again, there was some error at your end" . $conn->error;
        }

        $sql = "SELECT num1, num2 FROM numbers";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Result : " .  $row["num1"] . " " . $row["num2"] . "<br>";
            }
        } else {
            echo "0 results";
        }
    }
    ?>
    <?php
    class abc
    {
        public $num1, $num2;

        function __construct()
        {
            $this->num1 = $_POST["num1"];
            $this->num2 = $_POST["num2"];
        }
    }

    class def extends abc
    {
        function addition()
        {
            $result = $this->num1 + $this->num2;
            echo "Addtion : $result  <br>";
        }
    }

    class ghi extends abc
    {
        function multiplication()
        {
            $result = ($this->num1 * $this->num2);
            echo "Multiplication : $result  <br>";
        }
    }

    $add = new def();
    $mul = new ghi();
    $add->addition();
    $mul->multiplication();
    ?>
</body>

</html>
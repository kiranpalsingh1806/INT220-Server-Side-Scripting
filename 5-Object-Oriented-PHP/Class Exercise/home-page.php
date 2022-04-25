<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="land-page.php" method="post">
        <label for="num1">Num1:</label><br>
        <input type="number" id="num1" name="num1" value=""><br>
        <label for="num2">Num1:</label><br>
        <input type="number" id="num2" name="num2" value=""><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
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
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" value=""><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value=""><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value=""><br><br>
        <input type="submit" value="Log In" name="submit">
    </form>
</body>

</html>
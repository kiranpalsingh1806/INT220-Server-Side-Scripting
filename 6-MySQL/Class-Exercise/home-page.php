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
    <h1>Student Registration Form</h1>
    <form action="land-page.php" method="post">
        <label for="fullname">Name:</label><br>
        <input type="text" id="fullname" name="fullname" value=""><br>
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" value=""><br>
        <label for="uid">UID:</label><br>
        <input type="number" id="uid" name="uid" value=""><br>
        <label for="ctc">CTC :</label><br>
        <input type="number" id="ctc" name="ctc" value=""><br>
        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob"><br>
        <label for="fname">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
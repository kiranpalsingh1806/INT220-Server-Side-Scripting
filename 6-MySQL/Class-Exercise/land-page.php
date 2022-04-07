<?php
session_start();
?>
<?php
// Cookie for name
$fullname = "fullname";
$fullname_value = $_POST["fullname"];
$_SESSION["fullname"] = $_POST["fullname"];
setcookie($fullname, $fullname_value, time() + (60 * 60), "/");

// Cookie for location
$location = "location";
$location_value = $_POST["location"];
setcookie($location, $location_value, time() + (60 * 60), "/");

// Cookie for uid
$uid = "uid";
$uid_value = $_POST["uid"];
setcookie($uid, $uid_value, time() + (60 * 60), "/");

// Cookie for ctc
$ctc = "ctc";
$ctc_value = $_POST["ctc"];
setcookie($ctc, $ctc_value, time() + (60 * 60), "/");

// Cookie for dob
$dob = "dob";
$dob_value = $_POST["dob"];
setcookie($dob, $dob_value, time() + (60 * 60), "/");


// Cookie for email
$email = "email";
$email_value = $_POST["email"];
setcookie($email, $email_value, time() + (60 * 60), "/");
?>

<?php
if (isset($_POST["submit"])) {
    echo "You are logged in successfully !!! <br>";

    $uid_val = $_POST["uid"];
    $fullname_val =  $_POST["fullname"];
    $location_val =  $_POST["location"];
    $ctc_val = $_POST["ctc"];
    $dob_val = $_POST["dob"];
    $email_val = $_POST["email"];


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


    $insertIntoTable = "INSERT INTO p2(uid, fullname, location, ctc, dob, email) VALUES ('$uid_val', '$fullname_val', '$location_val', '$ctc_val',' $dob_val', '$email_val')";

    if ($connect->query($createTable) && $connect->query($insertIntoTable)) {
        echo "Dear $_SESSION[fullname] , Data has been inserted :)<br>";
    } else {
        echo "Try again, there was some error at your end" . $conn->error;
    }
}
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
    <form action="logged-out.php" method="post">
        <input type="submit" value="Log Out" name="submit">
    </form>
</body>

</html>
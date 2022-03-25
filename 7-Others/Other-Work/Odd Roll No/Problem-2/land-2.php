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
    $int = $_POST["age"];

    $low = 26;
    $high = 56;

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $low, "max_range" => $high))) === false) {
        echo ("Age is not valid :(");
    } else {
        echo ("Age is valid :)");
    }
    ?>
</body>

</html>
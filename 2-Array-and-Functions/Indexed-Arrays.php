<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
    </style>
</head>

<body>

    <?php
    echo "<h1>Different Ways of Printing arrays</h1>";
    echo "<h4>Using Index</h4>";
    $furniture = array("Table", "Chair", 5, "Cupboards", "Chaises", "Recliner");
    echo "I love $furniture[1], $furniture[2] $furniture[3] and $furniture[4]." . "<br>";

    echo "--------------------------" . "<br>";
    echo "<h4>print_r</h4>";
    print_r($furniture);

    echo "<br>" . "-------------------------" . "<br>";
    echo "<h4>Using Count to store length</h4>";
    $length = count($furniture);
    for ($i = 0; $i < $length; $i++) {
        echo  $furniture[$i] . "<br>";
    }

    echo "--------------------------" . "<br>";
    echo "<h4>Using foreach loop</h4>";
    foreach ($furniture as $item) {
        echo  $item . "<br>";
    }

    echo "--------------------------" . "<br>";
    echo "<h4>Using var_dump</h4>";
    var_dump($furniture);
    ?>
</body>

</html>
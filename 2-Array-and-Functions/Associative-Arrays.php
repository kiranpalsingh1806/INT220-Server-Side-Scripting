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
    echo "<h1>Associative arrays</h1>";
    $dictionary = array(
        "act" => "Take action",
        "cob" => "Close of business",
        "cog" => "A wheel or bar"
    );
    echo "<h4>print_r</h4>";
    print_r($dictionary);

    echo "<br>" . "--------------------------" . "<br>";
    echo "<h4>Using var_dump</h4>";
    var_dump($dictionary);
    echo "<br>" . "--------------------------" . "<br>";

    echo "<h4>Using foreach</h4>";

    foreach ($dictionary as $def => $meaning) {
        echo "Key : $def , Value : $meaning" . "<br>";
    }

    echo "<h4>Using for loop </h4>";

    $len = count($dictionary);
    $def = array_keys($dictionary);
    $meaning = array_values($dictionary);

    for ($i = 0; $i < $len; $i++) {
        echo "Key : $def[$i] , Value :  $meaning[$i]" . "<br>";
    }

    ?>
</body>

</html>
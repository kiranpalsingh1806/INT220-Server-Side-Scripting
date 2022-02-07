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
    echo "<pre>";
    echo "<h1>Multidimensional arrays</h1>";
    $players = array(
        "7" => array("1", "MS Dhoni", "CSK"),
        "18" => array("2", "Virat Kohli", "RCB"),
        "12" => array("3", "Rohit Sharma", "MI"),
        "17" => array("4", "Rishabh Pant", "DC"),
    );

    $jersey = array_keys($players);

    for ($row = 0; $row < 4; $row++) {
        for ($col = 0; $col < 3; $col++) {
            echo $players[$jersey[$row]][$col] . " ";
        }
        echo "<br>";
    }

    print_r($players);

    ?>
</body>

</html>
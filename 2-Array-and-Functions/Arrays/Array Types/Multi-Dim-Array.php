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
        array("1", "MS Dhoni", "CSK", array("Jersey_No" => 7)),
        array("2", "Virat Kohli", "RCB", array("Jersey_No" => 18)),
        array("3", "Rohit Sharma", "MI", array("Jersey_No" => 12)),
        array("4", "Rishabh Pant", "DC", array("Jersey_No" => 17)),
    );

    echo $players[0][0] . ". Name :  " . $players[0][1] . ",  Team :  " . $players[0][2] . "<br>";
    echo $players[1][0] . ". Name :  " . $players[1][1] . ", Team :  " . $players[1][2] . "<br>";
    echo $players[2][0] . ". Name :  " . $players[2][1] . ", Team :  " . $players[2][2] . "<br>";

    echo "<br>" . "--------------------------" . "<br>";
    echo "<h4>Using print_r</h4>";
    print_r($players);

    echo "<br>" . "--------------------------" . "<br>";
    echo "<h4>Using for loop</h4>";
    for ($row = 0; $row < 4; $row++) {
        for ($col = 0; $col < 3; $col++) {
            echo $players[$row][$col] . " ";
            if ($col == 2) {
                echo $players[$row][$col["Jersey_No"]] . " ";
            }
        }
        echo "<br>";
    }

    ?>
</body>

</html>
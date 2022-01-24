<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Exercise 1</h3>

    <?php
    $a = 10;
    $b = 20;
    $myname = "Kiranpal";

    echo "The value of a : " . $a . '<br>';
    echo "The value of b : " . $b . '<br>';

    echo "-------------------------" . '<br>';
    echo "After Swapping" . '<br>';
    echo "-------------------------" . '<br>';

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo "The new value of a : " . $a . '<br>';
    echo "The new value of b : " . $b . '<br>';
    echo "............................" . '<br>';
    echo "My name is $myname" . '<br>';
    echo "The length of my name is : " . strlen($myname) . '<br>';
    ?>
</body>

</html>
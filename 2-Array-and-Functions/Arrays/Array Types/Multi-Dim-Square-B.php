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
    $arr = [[[11, 12, 13], 2, [22, 23, 24]], [4, 5, 6], [7, 8, 9]];
    echo $arr[0][0][0] . "\n";
    echo $arr[0][0][1] . "\n";
    echo $arr[0][0][2] . "\n";
    echo $arr[0][1] . "\n";
    echo $arr[0][2][0] . "\n";
    echo $arr[0][2][1] . "\n";
    echo $arr[0][2][2] . "\n";
    echo "<pre>";
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            margin: 30px;
        }

        html {
            font-size: 25px;
            font-weight: 600;
            line-height: 1.125;
            color: #202011;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

    <div id="#myDiv">
        <?php

        define("A", 10);
        echo A;
        echo '<br>';

        $B = 19;
        // A += $B;
        echo A;
        ?>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
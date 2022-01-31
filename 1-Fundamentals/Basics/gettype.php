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

        .myDiv {
            background-color: dodgerblue;
            color: white;
            text-align: center;
            padding: 10px;
            margin: 50px;
            padding-top: 30px;
            height: 100px;
        }

        .myDiv2 {
            background-color: brown;
            color: white;
            text-align: center;
            padding: 10px;
            margin: 50px;
            padding-top: 30px;
            height: 100px;
        }

        .myDiv3 {
            background-color: palevioletred;
            color: #000;
            text-align: center;
            padding: 10px;
            margin: 50px;
            padding-top: 30px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="myDiv">
        <?php
        $myName = "Kiranpal Singh";
        echo "My name is " . $myName . '<br>';
        ?>
    </div>
    <div class="myDiv2">
        <?php
        $myName = "Kiranpal Singh";
        var_dump($myName);
        ?>
    </div>
    <div class="myDiv3">
        <?php
        $myName = "Kiranpal Singh";
        echo "gettype() : " . gettype($myName) . '<br>';
        ?>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi Car</title>
    <style>
        #imageCar {
            height: 100px;
        }
    </style>
</head>

<body>

    <img id="imageCar" src="https://www.pngitem.com/pimgs/m/184-1848596_new-2019-audi-q5-hd-png-download.png"><br>

    <?php
    function buyCar($name, $price, $model)
    {
        echo "Congratulations !! You have bought <strong>$name</strong> for $ <b>$price</b> and its model is <b>$model</b>." . "<br>";
    }

    function driveCar($mode, $speed)
    {
        echo "You are driving on <b>$mode</b> with <b>$speed</b> km/h." . "<br>";
    }

    function fillDiesel($price, $company = "Indian Oil")
    {
        echo "Your tank is filled with $company for Rs <b>$price</b>. " . "<br>";
    }

    buyCar("Audi", 125000, "2020 Audi Q5");
    fillDiesel(500, "Hindustan Petroleum");
    driveCar("road", 60);
    ?>

</body>

</html>
<?php

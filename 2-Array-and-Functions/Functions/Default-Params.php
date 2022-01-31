<?php

function buyCar($name, $fuel = "Diesel")
{
    echo "Your car is $name and its fuel type is $fuel" . "<br>";
};

buyCar("Audi");
buyCar("Celerio", "Petrol");

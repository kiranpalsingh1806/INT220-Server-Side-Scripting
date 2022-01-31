<?php

// Global variables
$age = 20;

function ageFunction(&$age)
{
    global $age;
    $age += 1; // One year later
    echo "Age : $age" . "<br>";
}
echo "<br>" . "-----------------------" . "<br>";
echo "Before Function call" . "<br>";
echo "Age : $age" . "<br>";
echo  "-----------------------" . "<br>";


ageFunction($age);

echo "-----------------------" . "<br>";
echo "After Function call" . "<br>";
echo "Age : $age" . "<br>";
echo "-----------------------" . "<br>";

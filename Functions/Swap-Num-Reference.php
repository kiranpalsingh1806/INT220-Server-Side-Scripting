<?php

// Global variables
$a = 100;
$b = 230;

function swap(&$num1, &$num2)
{
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
}
echo "<br>" . "-----------------------" . "<br>";
echo "Before Function call" . "<br>";
echo "Value of a : $a" . "<br>";
echo "Value of b : $b" . "<br>";
echo  "-----------------------" . "<br>";

swap($a, $b);
echo  "Function executing....." . "<br>";
echo "-----------------------" . "<br>";
echo "After Function call" . "<br>";
echo "Value of a : $a" . "<br>";
echo "Value of b : $b" . "<br>";
echo "-----------------------" . "<br>";

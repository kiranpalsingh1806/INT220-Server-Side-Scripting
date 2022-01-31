<?php

// Global variables
$num1 = 1000;

function php()
{
    // $num1 = 20;
    global $num1;
    echo $num1 . "<br>";
}

php();

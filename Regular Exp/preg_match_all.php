<?php

define("a", "Hi, My name is Kiranpal. My full name is Kiranpal Singh. People call me Kiranpal");
echo constant("a"), "<br>";
echo a, '<br>';

$b = preg_match_all("/KIRANpal/i", a, $c);

if ($b) {
    echo "Found it :) Your name is there in list!!", "<br>";
} else {
    echo "Better Luck Next Time :)";
}

echo "<pre>";
print_r($c);
echo "</pre>";

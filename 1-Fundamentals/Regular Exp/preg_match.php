<?php

define("a", "Hi, My name is Kiranpal");
echo constant("a"), "<br>";
echo a, '<br>';

$b = preg_match("/Hi/", a);

if ($b) {
    echo "Found it :) It is there in string", "<br>";
} else {
    echo "Better Luck Next Time :)";
}

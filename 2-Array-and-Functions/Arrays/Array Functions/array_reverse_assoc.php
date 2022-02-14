<?php
echo "<pre>";
$_2 = 200;

$players = array("Captain_1" => "Dhoni", "Captain_2" => "Kohli", "Captain_3" => "Rohit");
$players2 = array("_1" => "Dhoni", "2" => "Kohli", "_3" => "Rohit");

$reverse = array_reverse($players2);
$preserve = array_reverse($players2, true);

print_r($players2);
print_r($reverse);
print_r($preserve);

echo "<pre>";

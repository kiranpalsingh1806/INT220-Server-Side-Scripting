<?php
$names = array("a" => "Dhoni", "b" => "Rohit", "c" => "Kohli");
$excaptain = array("d" => "Dhoni", "b" => "Kohli");
$result = array_diff($names, $excaptain);
echo "<pre>";
print_r($result);
echo "<pre>";

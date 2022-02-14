<?php
$name = array("MS Dhoni", "Virat Kohli", "Rohit Sharma");
$jersey = array(7, 18, 12);

echo "<pre>";
$players = array_combine($name, $jersey);
print_r($name);
print_r($jersey);
print_r($players);
echo "<br>Array Combine - 2nd array passed as first <br><br>";
$players = array_combine($jersey, $name);
print_r($players);
echo "<pre>";

<?php
$name = array("a" => "MS Dhoni", "b" => "Virat Kohli", "c" => "Rohit Sharma", "d" => "Rishabh Pant", "e" => "MS Dhoni 2", "f" => "Virat Kohli 2", "g" => "Rohit Sharma 2", "h" => "Rishabh Pant 2", "i" => "MS Dhoni 3", "j" => "Virat Kohli 3");
$jersey = array(7, 18, 12, 17, 7, 18, 12, 17, 7, 18);

$players = array_combine($name, $jersey);
echo "<pre>";
print_r($players);
print_r(array_chunk($players, 2));
print_r(array_chunk($players, 2, true));
echo "<pre>";

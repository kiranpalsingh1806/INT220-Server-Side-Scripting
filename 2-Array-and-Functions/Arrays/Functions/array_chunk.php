<?php
$name = array("MS Dhoni", "Virat Kohli", "Rohit Sharma", "Rishabh Pant", "MS Dhoni 2", "Virat Kohli 2", "Rohit Sharma 2", "Rishabh Pant 2", "MS Dhoni 3", "Virat Kohli 3");
$jersey = array(7, 18, 12, 17, 7, 18, 12, 17, 7, 18);

$players = array_combine($name, $jersey);
echo "<pre>";
print_r(array_chunk($players, 2));
print_r(array_chunk($players, 2, true));
echo "<pre>";

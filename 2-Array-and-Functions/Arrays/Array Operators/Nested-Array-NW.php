<?php
echo "<pre>";
$players1 = array(
    array("1", "MS Dhoni", "CSK", array("Jersey_No" => 7)),
    array("2", "Virat Kohli", "RCB", array("Jersey_No" => 18)),
    array("3", "Rohit Sharma", "MI", array("Jersey_No" => 12)),
    array("4", "Rishabh Pant", "DC", array("Jersey_No" => 17)),
);
$players2 = array(
    array("A", "Ronaldo", "Portugal", array("Jersey_No" => 7)),
    array("B", "Messi", "Argentina", array("Jersey_No" => 10)),
    array("C", "Mbappe", "France", array("Jersey_No" => 10)),
    array("D", "Salah", "Egypt", array("Jersey_No" => 10)),
);

$players3 = array("1", "MS Dhoni", "CSK", array("Jersey_No" => 7));
$players4 = array("2", "Virat Kohli", "RCB", array("Jersey_No" => 18));

$players5 = array("1", "MS Dhoni", "CSK", "7");
$players6 = array("2", "Virat Kohli", "RCB", "18");

// print_r($players1);
// print_r($players2);
// print_r($players3);
// print_r($players4);
print_r($players5);
print_r($players6);

$playersUnion = $players5 + $players6;
echo "Union \n";
var_dump($playersUnion);

echo "Equality : \n";
var_dump($players3 == $players3);
echo "\n";

echo "Strict Equality of \$a and \$b: \n";
var_dump($players1 === $players2);
echo "\n";

echo "Inequality of \$a and \$b: \n";
var_dump($players1 != $players2);
echo "\n";

echo "Strict Inequality of \$a and \$b: \n";
var_dump($players1 <> $players2);
echo "\n";

echo "<pre>";

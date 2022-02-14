<?php
echo "<pre>";
$players1 = array("A1" => "Messi", "A2" => "Ronaldo", "A3" => "Neymar", "A4" => "Mbappe");
$players2 = array("B1" => "Kane", "B2" => "Ronaldo", "B3" => "Salah", "B4" => "Messi");

print_r($players1);
print_r($players2);

$playersUnion = $players1 + $players2;
echo "Equality of \$a and \$b: \n";
var_dump($players1 == $players2);
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

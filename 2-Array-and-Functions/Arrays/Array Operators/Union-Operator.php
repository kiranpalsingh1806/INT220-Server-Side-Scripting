<?php
echo "<pre>";
$players1 = array("A1" => "Messi", "A2" => "Ronaldo", "A3" => "Neymar", "A4" => "Mbappe");
$players2 = array("B1" => "Kane", "B2" => "Ronaldo", "B3" => "Salah", "B4" => "Messi");

$playersUnion = $players1 + $players2;
echo "Union of \$a and \$b: \n";
var_dump($playersUnion);

echo "<pre>";

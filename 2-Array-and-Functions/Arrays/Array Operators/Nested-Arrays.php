<?php
echo "<pre>";
$players1 = array("A1" => "Messi", "A2" => array("A21" => "Ronaldo", "A22" => "Ronaldinho"), "A3" => "Neymar", "A4" => "Mbappe");
$players2 = array("B1" => "Kane", "B2" => array("Ronaldo", "Griezmann"), "B3" => "Salah", "B4" => array("Messi", "Pele"));

$playersUnion = $players1 + $players2;
echo "Union of \$a and \$b: \n";
var_dump($playersUnion);

echo "Equality of \$a and \$b: \n";
if ($players1 == $players2) {
    echo "Matching\n";
} else {
    echo "Not matching\n";
}
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

<?php
echo "<pre>";
$players1 = array("Messi", "Chhetri", "Ronaldo", "Ronaldinho", "Neymar", "Mbappe", "Kane", "Salah", "Kohli", "Dhoni", "Yuvraj", "Rohit", "Pant", "Bumrah", "Shami", "Surya", "Rahul", "Mayank", "Chahal", "Kuldeep");
$players2 = array("_1" => "Messi", "_2" => "Chhetri", "_3" => "Pollard", "_4" => "Ronaldinho", "_5" => "Neymar", "_6" => "Markande", "_7" => "Kane", "_8" => "Salah", "_9" => "Kohli", "_10" => "Dhoni", "_11" => "Yuvraj", "_12" => "Rohit", "_13" => "Pant", "_14" => "Bumrah", "_15" => "Shami", "_16" => "Surya", "_17" => "Rahul", "_18" => "Mayank", "_19" => "Chahal", "_20" => "Kuldeep");
$players3 = array("_A" => "Messi", "_B" => "Chhetri", "_C" => "Pollard", "_D" => "Ronaldinho", "_E" => "Neymar", "_F" => "Markande", "_G" => "Kane", "_H" => "Salah", "_I" => "Kohli", "_J" => "Dhoni", "_K" => "Yuvraj", "_L" => "Rohit", "_M" => "Pant", "_N" => "Bumrah", "_O" => "Shami", "_P" => "Surya", "_Q" => "Rahul", "_R" => "Mayank", "_S" => "Chahal", "_T" => "Kuldeep");

$playersUnion = $players2 + $players3;
echo "Union of \$a and \$b: \n";
var_dump($playersUnion);

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

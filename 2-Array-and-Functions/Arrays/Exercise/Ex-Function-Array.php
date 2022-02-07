<?php

function printArray($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "<pre>";
}

function printArrayFor($arr)
{
    $length = count($arr);
    $definition = array_keys($arr);
    $meaning = array_values($arr);

    for ($i = 0; $i < $length; $i++) {
        echo "Key : $definition[$i] , Value :  $meaning[$i]" . "<br>";
    }
}

function printArrayForEach($arr)
{
    foreach ($arr as $definition => $meaning) {
        echo "Definition : $definition , Meaning : $meaning" . "<br>";
    }
}

$dictionary = array(
    "act" => "Take action",
    "cob" => "Close of business",
    "cog" => "A wheel or bar"
);

printArray($dictionary);
echo "-----------------------------" . "<br>";
printArrayFor($dictionary);
echo "-----------------------------" . "<br>";
printArrayForEach($dictionary);

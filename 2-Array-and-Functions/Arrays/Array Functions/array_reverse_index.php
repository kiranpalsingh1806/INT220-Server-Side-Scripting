<?php
echo "<pre>";
$numbers = array(1, 2, 3, 4, 5);

$reverse = array_reverse($numbers);
$preserve = array_reverse($numbers, true);

print_r($numbers);
print_r($reverse);
print_r($preserve);

echo "
<pre>";

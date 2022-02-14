<?php
$site = array("www.", "google", ".com");
$lower = array_search(".com", $site);
$upper = array_search(".Com", $site);

print_r($lower);
echo "<br>";
var_dump($upper);

<?php

define("a", "LPU LPU Has Set The GUINNESS WORLD RECORD Of ‘Largest Online Video Album Of People Saying The Same Sentence’. I Am Thankful To LPU For Making Us A Part Of Its Largest Placement Network. I Am Proud To Be A Verto of LPU. ");
echo a, '<br>', '<br>';

$b = preg_match_all("/lpu/i", a, $c, PREG_OFFSET_CAPTURE);

echo "The pattern was found in string $b times." . '<br>';

echo "<pre>";
print_r($c);
echo "</pre>";

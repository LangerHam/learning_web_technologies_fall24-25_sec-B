<?php

$arr = [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$search = 70;
$s = false;

foreach ($arr as $element)
{
    if($element == $search)
    {
        $s = true;
        break;
    }
}

if($s)
{
    echo "Element $search found in the array.";
}

?>
<?php

$num1 = 56465;
$num2 = 851354;
$num3 = 5215;

if($num1 >= $num2 && $num1 >= $num3)
{
    echo "$num1 is the largest number.";
}
elseif($num2 >= $num1 && $num2 >= $num3)
{
    echo "$num2 is the largest number.";
}
else
{
    echo "$num3 is the largest number.";
}

?>
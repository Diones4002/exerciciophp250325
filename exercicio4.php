<?php 
$num1 = 1000;
$num2 = 300;
$num3 = 30;

if($num1 > $num2 && $num1 > $num3 && $num2 > $num3) {
    echo "$num1 $num2 $num3";
}

if($num1 > $num2 && $num1 > $num3 && $num2 < $num3) {
    echo "$num1 $num3 $num2";
}

if($num2 > $num1 && $num2 > $num3 && $num1 > $num3) {
    echo "$num2 $num1 $num3";
}

if($num2 > $num1 && $num2 > $num3 && $num1 < $num3) {
    echo "$num2 $num3 $num1";
}

if($num3 > $num1 && $num3 > $num2 && $num1 > $num2) {
    echo "$num3 $num1 $num2";
}

if($num3 > $num1 && $num3 > $num2 && $num1 < $num2) {
    echo "$num3 $num2 $num1";
}

?>

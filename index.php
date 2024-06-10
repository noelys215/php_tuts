<?php

//$age = 21;
//$age = 15;
//$age = -1;
//$adult = false;

$hours = 50;
$rate = 15;
$weekly_pay = null;

//if ($age >= 18) {
//    echo "You may enter";
//} elseif ($age <= 0) {
//    echo "Invalid Age";
//} else {
//    echo "You may not enter";
//}

//if ($adult){
//    echo "You are an adult";
//} else {
//    echo "Your a child";
//}
if ($hours <= 0) {
    $weekly_pay = 0;
} else if ($hours <= 40) {
    $weekly_pay = $hours * $rate;
} else {
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
}


echo "You made \${$weekly_pay} this week";
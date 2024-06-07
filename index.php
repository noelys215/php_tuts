<?php

$name = "Henry B.";
$food = "gelato";
$email = "email@google.com";
$age = 21;
$users = 2;
$quantity = 3;

$gpa = 3.0;
$price = 4.99;
$tax_rate = 5.1;

$employed = true;
$online = false;
$for_sale = true;

$total = null;


echo "You have ordered $quantity x {$food}s<br>";
$total = $quantity * $price;
echo "Your total is \$$total.";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br/>
<button>Do Something</button>
</body>
</html>
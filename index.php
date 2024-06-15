<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="">Enter a Country</label><br>
    <input type="text" name="country"><br>
    <input type="submit">
</form>
</body>
</html>

<?php
$foods = array("apples", "oranges","mango", "coconut");

$capitals = array(
    "USA" => "Washington D.C",
    "Japan" => "Tokyo",
    "South Korea" => "Seoul",
    "India" => "New Delhi",
);

$capitals['USA'] = "New Jersey";
$capitals['Puerto Rico'] = "San Juan";
//array_shift($capitals);

//foreach ($capitals as $capital => $name) echo "{$capital} | $name<br>";


$capital = $capitals[$_POST["country"]];

echo"The capital is {$capital}";

?>
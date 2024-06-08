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
    <label><input type="text" name="radius"></label><label>Radius: </label><br>

<!--    <label><input type="text" name="y"></label><label>Y: </label><br>-->

<!--    <label><input type="text" name="z"></label><label>Z: </label><br>-->
    <input type="submit" value="calculate">
</body>
</html>

<?php
$radius = $_POST['radius'];
$circumference = null;
$area = null;
$volume = null;

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume,2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

echo "Volume: $volume<br>";
echo "Area = $area cm<br>";
echo "Circumference: $circumference<br>";
//$x = $_POST['x'];
//$y = $_POST['y'];
//$z = $_POST['z'];
//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = pow($x, $y);
//$total = max($x, $y, $z);
//$total = min($x, $y, $z);
//$total = pi();
//$total = rand(1, 6);


//echo $total;

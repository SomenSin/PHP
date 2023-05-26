<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="circle.php" method="get">
    <label>Enter Circle Radius (in meter) : </label> <input type="number" name="radius" min=1 minlength="1">
    <br>
    <button type="submit">Submit</button>
    <br>
    </form>
</body>
</html>

<?php
$r = $_GET["radius"];
$area = pi()*pow($r,2);
$area = round($area,2);
$parameter = 2*pi()*$r;
$parameter = round($parameter,2);
echo "Area of circle = {$area}m^2<br>";
echo "Parameter of circle = {$parameter}m<br>";
?>
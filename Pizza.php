<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="Pizza.php" method="post">
		<label>QUANTITY : </label> <input type="number" name="QUANT">
		<br>
		<button type="submit">TOTAL</button>

	</form>
	
</body>
</html>

<?php
$quant = $_POST["QUANT"];
$price = 4.99;
$total =  NULL;
$total = $quant*$price ;
echo "Your have ordered $quant Pizzas of \$$price each<br>";
echo "Your total is \$$total <br>";
?>
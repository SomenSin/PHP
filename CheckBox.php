<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="CheckBox.php" method="post">
        <input type="checkbox" name="food[]" value="pizza">PIZZA</input>
        <br>
        <input type="checkbox" name="food[]" value="burger">BURGER</input>
        <br>
        <input type="checkbox" name="food[]" value="fries">FRIES</input>
        <br>
        <input type="checkbox" name="food[]" value="chaii">CHAII</input>
        <br>
        <button type="submit" name="submitBtn2">Submit</button>
</form>

</body>
</html>


<?php

    if (isset($_POST["submitBtn2"])) {
        $foods = $_POST["food"];
        foreach($foods as $i) {
            echo "<br>YOU Like - \" {$i} \"";
        }        

    }
    

?>
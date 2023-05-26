<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="buttons.php" method="post">
        <input type='radio' name="course" value="B.Tech">B.Tech</input>
        <br>
        <input type="radio" name="course" value="B.Com">B.Com</input>
        <br>
        <input type="radio" name="course" value="BBA">BBA</input>
        <br>
        <button type="submit" name="submitBtn" value="submit" >Submit</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST["submitBtn"])) {
        if(isset($_POST["course"])) {
            echo "Selected Choice is - ".$_POST["course"];
        }
        else {
            echo "Please Select a choice";
        }
    }  
        

?>
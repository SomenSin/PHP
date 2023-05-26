<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for%20while.php" method="post">
        <label>Enter CountDown :</label>
        <input type="number" name="num" min=1>
        <br>
        <button type="submit">Submit</button>
        <br>
    </form>
</body>
</html>

<?php
$n=0;
$i =0;
$n = $_POST["num"];
for($i=$n;$i>=0;$i--) {
    if($i==0) {
        echo $i."<br>END OF COUNTDOWN 1<br><br>";
        break;
    }
    else {
        echo $i."<br>";
    }
}
$i =0;
while($i!=$n+1) 
{
    if($i==$n) {
        echo $i."<br>END OF COUNTDOWN";
        break;
    }
    else {
        echo $i."<br>";
    }
    $i++;
}
?>
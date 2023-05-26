<?php

$conn = mysqli_connect("localhost:3306","root","","mydb");
if(!$conn) {
    echo "Not connected";
}
else {
    /*
    echo "Database is Connected..<br>";
    $res = mysqli_query($conn,"select * from student");  //sql command
    echo "Name   Age<br>";
    while($i = mysqli_fetch_assoc($res) ) {
        echo $i["name"]."   ".$i["age"]."<br>";   //printing name and age
    }

    mysqli_query($conn,"insert into student values('Yuvraj',20)");  //Inserting Yuvraj
    echo "<br> ***Adding Yuvraj*** <br>";
    echo "Name   Age<br>";
    $res = mysqli_query($conn,"select * from student"); 
    while($i = mysqli_fetch_assoc($res) ) {
        echo $i["name"]."   ".$i["age"]."<br>";   //printing name and age
    }
    echo "<br>Affected rows = ".mysqli_affected_rows($conn)."<br>";

    mysqli_query($conn,"delete from student where name='Yuvraj'");  //deleting Yuvraj
    echo "<br> ***Deleting Yuvraj*** <br>";
    echo "Name   Age<br>";
    $res = mysqli_query($conn,"select * from student"); 
    while($i = mysqli_fetch_assoc($res) ) {
        echo $i["name"]."   ".$i["age"]."<br>";   //printing name and age
    }
    echo "<br>Affected rows = ".mysqli_affected_rows($conn);
*/

    mysqli_query($conn,"insert into student values('Yuvraj1','f')");  //Inserting Yuvraj

    mysqli_close($conn);
}
?>
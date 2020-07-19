<?php
// connect inculde
require("connect.php");

//write some data
$write = "INSERT INTO people(id,firstname,lastname,dob,gender) VALUES('5','Kasilingam','Chinnu','1956-04-17','M')";
$connect->query($write);
if($connect->query($write)===TRUE){
    echo "Data inserted into Table  created successfully";
}else{
    echo "Error Creating database:".$connect->error;
}

$connect->close();
?>
<?php
$servername="localhost";
$username="root";
$password = "";
$dbname = "phpacademy";


$connect =new mysqli($servername,$username,$password,$dbname);

if($connect->connect_error){
    die('connection failed:'.$connect->connect_error);
}
echo "Connected successfully to " .$dbname ;
?>

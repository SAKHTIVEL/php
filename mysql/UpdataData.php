<?php
// connect inculde
require("connect.php");

//updata data
$update = "UPDATE people SET dob='1993-06-23' WHERE id='1'";
$connect->query($update);

$connect->close();
?>

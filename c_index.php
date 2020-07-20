<?php

$exp = time() + 86400;
$exp_unset = time() -86400;
//setcookie("name","Sakthi",$exp);

//setcookie("age",19,$exp);
//echo $_COOKIE['age'];
//echo $_COOKIE['name'];

//echo $_COOKIE['name']." is ".$_COOKIE['age'];

//print_r($_COOKIE);

setcookie("name","",$exp_unset);

if(isset($_COOKIE['name']))
    echo "Cookie is set";
else 
    echo "cookie is not set";
?>
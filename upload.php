<?php 

$name= $_FILES['myfile']['name'];
$type = $_FILES['myfile']['type'];
$size = $_FILES['myfile']['size'];
$temp = $_FILES['myfile']['tmp_name'];
$error = $_FILES['myfile']['error'];
if($error > 0 ){
    die("Error uploading file! Code $error");
}
else {
    if($type == "video/avi" || $size > 500000){ 
        die("File format not suppported or File size too big");
    }
    else{
        move_uploaded_file($temp,"uploaded/".$name);
        echo "upload complete";
        echo "file properties name ".$name." type: ".$type.
        "size : ".$size;

    }
}
    
?>
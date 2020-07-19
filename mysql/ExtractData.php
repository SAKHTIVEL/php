<?php
// connect inculde
require("connect.php");

//extract data
$extract= "SELECT * FROM people WHERE gender='M' ";
$result = $connect->query($extract);

//determine number of rows 
$row_cnt =$result->num_rows;
echo "<br> Total Number of Records :" .$row_cnt;
if ($row_cnt > 0) {
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $dob = $row['dob'];
        $gender = $row['gender'];

        if($gender=="F")
            $gender ="Female";
        else
            $gender = "Male";
        
        echo "<br> $firstname $lastname was born on $dob and is $gender <br>"; 
        // echo " <br>The last person updated was <br> $firstname $lastname ";
        
    }        
}else {
    echo "0 Results";
}
$connect->close();
?>


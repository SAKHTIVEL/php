<?php
// connect inculde
require("connect.php");
/*
//write some data
$write = "INSERT INTO people(id,firstname,lastname,dob,gender) VALUES('4','Samundeeswari','AjithKumar','2000-04-26','F')";
$connect->query($write);
if($connect->query($write)===TRUE){
    echo "Data inserted into Table  created successfully";
}else{
    echo "Error Creating database:".$connect->error;
}

//updata data
$update = "UPDATE people SET dob='1993-06-23' WHERE id='1'";
$connect->query($update);*/

if($_POST['submit'])
{
    $firstname_form = $_POST['firstname'];
    $lastname_form = $_POST['lastname'];

//extract data
    $extract= "SELECT * FROM people WHERE firstname='$firstname_form' lastname='$lastname_form'  ORDER BY id DESC LIMIT 1";
    $result = $connect->query($extract);

  //determine number of rows 
$row_cnt =$result->num_rows;
//echo "<br> Total Number of Records :" .$row_cnt;
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
}/* else {
    echo "0 Results";
}*/
}
$connect->close();
?>

<form action='mysql.php' method='POST'>
First Name : <input type='text' name='firstname'><br>
Last Name : <input type='text' name='lastname'><br>
<input type='submit' name ='submit' value='Get data'>


</form>

<?php

//connect inculde
require("connect.php");

if(isset($_POST['submit'])) {
    $firstname_form = $_POST['firstname'];
    $lastname_form = $_POST['lastname'];
    $gender_form = $_POST['gender'];
    
    //extract data
    $extract= "SELECT * FROM people WHERE gender='$gender_form' ";  
    //firstname='$firstname_form' lastname='$lastname_form' ";
    $result = $connect->query($extract);
    

    
    //determine number of rows 
    $row_cnt =mysqli_num_rows($result);
    echo "<br> Total Number of Records :" .$row_cnt;
    // Show the results
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
    }else 
    echo "0 Results";
$connect->close();
}
?>
<form action='HtmlForm.php' method='POST'>
First Name : <input type='text' name='firstname'><br>
Last Name : <input type='text' name='lastname'><br>
Gender : <input type='text' name = 'gender'><br>
<input type='submit' name ='submit' value='Get data'>


</form>

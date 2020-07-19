<?php

//connect inculde
require("connect.php");

  
//extract data
$extract= "SELECT * FROM people";  
//firstname='$firstname_form' lastname='$lastname_form' ";
$result = $connect->query($extract);
       

    
    //determine number of rows 
    $row_cnt =mysqli_num_rows($result);
    echo "<br> Total Number of Records :" .$row_cnt;
    // Show the results
    if ($row_cnt > 0) {
        echo "<br><form action='HtmlFormUpdate.php' method='POST'>
        <select name='peoplename'>";
        while($row = $result->fetch_assoc()){
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            
            echo "<option value='$id'> $firstname </option>
            <br>"; 
        }
        echo "</select>
        <input type='text' name='tochange'>
        <input type='submit' name='submit' value='change'></form>";

    }else 
    echo "0 Results";

if(isset($_POST['submit'])){
$peoplename = $_POST['peoplename'];
echo $peoplename;
$tochange = $_POST['tochange'];
echo $tochange;
if($peoplename && $tochange){
    $update = "UPDATE people SET firstname='$tochange' WHERE id=$peoplename ";
    $connect->query($update);
    echo "<br> First name updated Successfully to :" .$tochange;
}
}
$connect->close();
?>
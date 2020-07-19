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
        echo "<br><form action='HtmlFormDelete.php' method='POST'>
        <select name='todelete'>";
        while($row = $result->fetch_assoc()){
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            
            echo "<option value='$id'> $firstname $lastname </option>
            <br>"; 
        }
        echo "</select>
        <input type='submit' name='submit' value='Delete'></form>";

    }else 
    echo "0 Results";

if(isset($_POST['submit'])){
    $todelete = $_POST['todelete'];
    echo $todelete;

    $delete = "DELETE FROM people WHERE id=$todelete ";
    $connect->query($delete);
    echo "<br>Successfully Deleted :" .$todelete;
}
$connect->close();
?>
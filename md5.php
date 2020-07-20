<form action='md5.php' method='POST'>
<input type='text/password' name='password'>
<input type='submit' value='Login'>
</form>
<?php

$userpaswword = "firespear";
$userpaswwordenc = md5($userpaswword);
$submitedenc = md5($_POST['password']);
if($_POST['password']){
    if($submitedenc == $userpaswwordenc){
        echo "Compared ".$submitedenc." to".$userpaswwordenc;
        die("Correct");
    }
    else
        die("Incorrect");
}
?>


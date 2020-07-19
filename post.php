<html>
<form action='post.php' method='POST'>
<input type='password' name='password'><br>
<input type='submit' value='Click here'>
</form>
</html>
<?php

$password = $_POST['password'];

if($password)
echo "Hello your password is $password";
else
echo "Enter your password";

?>

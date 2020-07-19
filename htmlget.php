<html>

<form action='htmlget.php' method='GET'>
<input type='text' name='e'>
<input type='submit' value='click here'>
</form>
</html>
<?php
$name = $_GET['e'];
if($name)
echo "Hello, $name.";
?>

<!DOCTYPE html>
<html>
<body>
<center>
<fieldset>
<legend>Change Email</legend>
</br>
<form action="/" method="post">
<input type="email" required="" name="email">
<input type="submit" value="update">
</form>
</br>
<?php 
if(isset($_POST['email'])){
	$email = ($_POST['email']);
	echo "status : Email changed</br>";
	echo "Email : $email" ;
}?>
</fieldset>
</center>
</body>
</html>
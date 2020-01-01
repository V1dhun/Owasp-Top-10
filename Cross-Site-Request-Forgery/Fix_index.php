<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
}?>
<!DOCTYPE html>
<html>
<body>
<center>
<fieldset>
<legend>Change Email</legend>
</br>
<form action="/Fix_index.php" method="post">
<input type="email" required="" name="email">
<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
<input type="submit" value="update">
</form>
</br>
<?php 
if(isset($_POST['email'])){
	if(isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    	 $email = ($_POST['email']);
		 echo "status : Email changed</br>";
		 echo "Email : $email" ;
	}else{
		echo "status : csrf_token invaild";
	}
}?>
</fieldset>
</center>
</body>
</html>
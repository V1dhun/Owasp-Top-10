<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>Current Stock</legend>
<center>
<form action="/" method="post">
Product : <select name="Product">
<option value="http://10.0.0.2/check.php?item=1">Laptop</option>
<option value="http://10.0.0.2/check.php?item=2">Router</option>
<option value="http://10.0.0.2/check.php?item=3">Switch</option>
</select>
=> <input type="submit" name="submit" value="check">	
</form></br>
<?php
if(isset($_POST['submit'])) {
    $product = $_POST['Product'];
    if (preg_match('#^http://#i', $product) !== 1) {
		echo "You can only use http!";
		die();
	}

	$handle = curl_init();
	curl_setopt($handle, CURLOPT_URL, $product);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($handle);
 	curl_close($handle);
 	echo "Current Stock : {$output}"; 
}
?>
</center>
</fieldset>
</body>
</html>
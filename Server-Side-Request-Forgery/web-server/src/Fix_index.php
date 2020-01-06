<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>Current Stock</legend>
<center>
<form action="/Fix_index.php" method="post">
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
    if(preg_match('#^http://10.0.0.2#i', $product) === 1) {
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL, $product);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($handle);
 		curl_close($handle);
 		echo "Current Stock : {$output}";
	}else {
		echo "Something Went Wrong!";
		die();
	}
	 
}
?>
</center>
</fieldset>
</body>
</html>
<!DOCTYPE html>
<body>
<fieldset>
<legend>Mail Status</legend>
<center>
<?php 
if(isset($_GET['view'])&& preg_match('/\w+$/', $_GET['view']))
{
	system("cat ./log/'{$_GET['view']}'");
}
?>
</center>
</fieldset>
</body>
</html>
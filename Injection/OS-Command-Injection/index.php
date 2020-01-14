<!DOCTYPE html>
<body>
<fieldset>
<legend>Mail Status</legend>
<center>
<?php 
if(isset($_GET['view'])) 
# view=mail.log
{
	system("cat ./log/{$_GET['view']}");
}
?>
</center>
</fieldset>
</body>
</html>
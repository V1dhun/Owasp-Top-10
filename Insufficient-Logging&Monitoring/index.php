<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>DashBoard</legend>
<center>
Status : Online
<?php

    $log  = "IP: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.'';
    file_put_contents('./access.log', $log, FILE_APPEND);

?> 
</center>
</fieldset>
</body>
</html>

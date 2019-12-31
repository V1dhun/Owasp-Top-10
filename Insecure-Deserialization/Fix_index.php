<!DOCTYPE html>
<body>
<center>
<fieldset>
<legend>Dashboard</legend>
</br>
<?php

setcookie("session", serialize(array('username'=>'guest','passwd'=>'guest')));

$cookie = unserialize($_COOKIE['session']);

if ($cookie['username'] === "admin" && $cookie['passwd'] === "admin") {
    echo "Hello Admin!";
} else {
    echo "Hello Guest!";
}
?>
</fieldset>
</center>
</body>
</html>


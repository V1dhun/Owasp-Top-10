<?php 
$db = mysqli_connect('172.17.0.1', 'user', 'qwerty','users') or die('Could not connect to the database');
$sql = "CREATE TABLE users (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(20) NOT NULL ,
password VARCHAR(30) NOT NULL
)";

mysqli_query($db, $sql);

$data = "INSERT INTO users (username,password)
VALUES ('admin','oh-my-password'),('dev','Work-hard')";

mysqli_query($db, $data);

?>
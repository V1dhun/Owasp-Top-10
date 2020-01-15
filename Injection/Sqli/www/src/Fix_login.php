<?php 
if(isset($_POST['submit'])){
    $db = mysqli_connect('172.17.0.1', 'user', 'qwerty','users') or die('Could not connect to the database');
    $usr = mysqli_real_escape_string($db,$_POST['username']); 
    $pwd = mysqli_real_escape_string($db,$_POST['password']); 
    $result = mysqli_query($db,"SELECT * FROM users WHERE username= '$usr' and password= '$pwd'") or die('Error: ' . mysqli_error($db));
    $rows = mysqli_num_rows($result);
    if($rows > 0){ 
        echo("Success! You are logged in");
        exit; 

    }else{ 
        echo "Wrong creds!"; 
        exit; 
    } 

}else{ 

    header("Location: index.php");     
    exit; 
} 

?>
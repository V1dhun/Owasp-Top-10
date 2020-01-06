<?php
if(isset($_GET['item'])) {
	$value = $_GET['item'];
	if($value === "1"){
		echo 24;
	}else if($value === "2"){
		echo 34;
	}else if($value === "3"){
		echo 27;
	}else{
		echo "Not Found";
	}
}
?>
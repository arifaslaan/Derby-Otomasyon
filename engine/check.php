<?php
	ob_start();
	session_start();
	if(!isset($_SESSION["loginstt"])){
		if($_SESSION["loginstt"]!='trudurherall'){
			header("Location:index.php");
		}
	}
?>

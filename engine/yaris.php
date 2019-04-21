<?php
	include("conn.php");
	mysqli_query($link,"SET NAMES UTF8");
	mysqli_query($link,"SET @row_number = 0");
	$sql = mysqli_query($link,"SELECT (@row_number:=@row_number + 1) AS num, id, ad, tarih, dosyaadi FROM yaris") or die(mysql_error());
?>

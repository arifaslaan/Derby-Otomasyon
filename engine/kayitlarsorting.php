<?php
	include("conn.php");
	mysqli_query($link,"SET NAMES UTF8");
	mysqli_query($link,"SET @row_number = 0");
	$sql = mysqli_query($link,"SELECT (@row_number:=@row_number + 1) AS num, ad, soyad, kunyeno, sehir, ulke, durum FROM katilimcilar ORDER BY sehir, ad") or die(mysql_error());
?>

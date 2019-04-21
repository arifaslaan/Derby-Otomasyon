<?php
	include("conn.php");
	mysqli_query($link,"SET NAMES UTF8");
	mysqli_query($link,"SET @row_number = 0");
	mysqli_query($link,"SELECT @row_number := COUNT(id) + 1 FROM katilimcilar");
	$sql = mysqli_query($link,"SELECT (@row_number:=@row_number - 1) AS num, id, ad, soyad, kunyeno, sehir, ulke, durum FROM katilimcilar ORDER BY id DESC") or die(mysql_error());
?>

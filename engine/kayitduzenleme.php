<?php
	require_once('conn.php');
	mysqli_query($link, "SET NAMES UTF8");
	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	$kunyeno = $_POST["kunyeno"];
	$durum = $_POST["durum"];
	$sehir = $_POST["sehir"];
	$id = $_GET["id"];
	$sql = "UPDATE katilimcilar SET ad='$ad', soyad='$soyad', kunyeno='$kunyeno', durum='$durum', sehir='$sehir' WHERE id='$id'";
	if(mysqli_query($link, $sql)===TRUE){
		header("Location:../kayitduzenle.php?stt=true");
	}
	else{
		header("Location:../kayitduzenle.php?stt=false");
	}
?>

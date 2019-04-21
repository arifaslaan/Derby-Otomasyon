<?php
include("conn.php");
ob_start();
session_start();
$kullaniciadi = $_POST['kullaniciadi'];
$parola = $_POST['parola'];
$sql = mysqli_query($link,"select id from kullanicilar where kullaniciadi='".$kullaniciadi."' and parola='".$parola."' ") or die(mysql_error());
if(mysqli_num_rows($sql))  {
	$rows = mysqli_fetch_assoc($sql);
	$id = $rows["id"];
    $_SESSION["loginstt"] = "truedurherall";
    $_SESSION["id"] = $id;
    header("Location:../kayitekle.php");
}
else {
    header("Location:../index.php?stt=false");
}
ob_end_flush();
?>

<?php
require_once('conn.php');
mysqli_query($link, "SET NAMES UTF8");
$id = $_GET["id"];
$sql = "DELETE FROM katilimcilar WHERE id=$id";
if(mysqli_query($link, $sql)===TRUE){
  header("Location:../kayitduzenle.php?stt=true");
}
else{
  header("Location:../kayitduzenle.php?stt=false");
}
?>

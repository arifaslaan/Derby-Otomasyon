<?php
include("conn.php");
$stt2 = 1;
$mynum = 2;
$count = 0;
$errorcount = 0;
$mytext = 'kunyeno';
$kunyeno = array($_POST['kunyeno']);
while($stt2 == 1){
  $mytext2 = $mytext."".$mynum;
  if(@$_POST[$mytext2] != NULL){
    array_push($kunyeno, $_POST[$mytext2]);
    $mynum = $mynum+1;
    $count =+ 1;
  }
  else{
    $stt2=0;
  }
}
mysqli_query($link, "SET NAMES 'utf8'");
if($count>=1){
  for($i = 0; $i < count($kunyeno); $i++){
    $sql = "UPDATE katilimcilar SET durum='Aktif' WHERE kunyeno=$kunyeno[$i]";
    $sql2 = mysqli_query($link,"select id from katilimcilar where kunyeno=$kunyeno[$i]") or die(mysql_error());
    if(mysqli_num_rows($sql2))  {
      if(mysqli_query($link, $sql)===TRUE){

      }
    }
    else{
      $errorcount =+ 1;
    }
  }
  if($errorcount>=1){
    header("Location:../kayitaktiflestir.php?stt2=false");
  }
  else{
    header("Location:../kayitaktiflestir.php?stt2=true");
  }
}
else{
  $sql = "UPDATE katilimcilar SET durum='Aktif' WHERE kunyeno=$kunyeno[0]";
  $sql2 = mysqli_query($link,"select id from katilimcilar where kunyeno=$kunyeno[0]") or die(mysql_error());
  if(mysqli_num_rows($sql2))  {
    if(mysqli_query($link, $sql)===TRUE){
      $stt = true;
    }
  }
  else{
    $stt = false;
  }
  if($stt==false){
    header("Location:../kayitaktiflestir.php?stt=false");
  }
  if($stt==true){
    header("Location:../kayitaktiflestir.php?stt=true");
  }
}
?>

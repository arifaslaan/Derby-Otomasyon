<?php 
	include('conn.php');
?>
<?php
    $id = $_GET["id"];
	$evrak = $_FILES["dosya"]["name"];
	$adi = $_POST['antadi'];
	$tarih = $_POST['anttarih'];
	$maxboyut = (1024*1024*5);
	$dosyauzantisi = substr($_FILES["dosya"]["name"],-4,4);
	$dosyayolu = '../../public_html/antremanlar/'.$evrak.'';
	if($_FILES["file"]["size"]>$maxboyut){
		$sor = false;
	}
	else{
		$d = $_FILES["dosya"]["type"];
		if($d == "text/html"){
			if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
				$tasi = move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyayolu);
				if($tasi){
				    mysqli_query($link, "SET NAMES 'utf8'");
				    $sql = "UPDATE antreman SET ad='$adi', tarih='$tarih', dosyaadi='$evrak' WHERE id='$id'";
					$sql = mysqli_query($link, $sql);
					if($sql){
					    $sor = true;
					}
					else{
					    $sor = false;
					}
				}
				else {
					$sor = false;
				}
			}
			else {
				$sor = false;
			}
		}
		else {
			$sor = false;
		}
	}
	if($sor==false){
		header("Location:../antremanduzenle.php?stt=false");
	}
	else{
		header("Location:../antremanduzenle.php?stt=true");	
	}
?>
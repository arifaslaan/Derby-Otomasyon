<?php
	$stt = @$_GET["stt"];
	$stt2 = @$_GET["stt2"];
	include("engine/check.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Kayıt Aktifleştir | Profesyonel Derby 45</title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/black/pace-theme-flash.css">
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
						<a class="navbar-brand" href="#"><b>Profesyonel Derby 45</b></a>
					</div>
					<div class="collapse navbar-collapse" id="defaultNavbar1">
						<ul class="nav navbar-nav">
							<li><a href="kayitlistele.php">Kayıt Listele</a></li>
							<li><a href="kayitekle.php">Kayıt Ekle<span class="sr-only"></span></a></li>
							<li><a href="kayitduzenle.php">Kayıt Düzenle</a></li>
							<li class="active"><a href="#">Kayıt Aktifleştir</a></li>
							<li><a href="antremanekle.php">Antreman Ekle</a></li>
							<li><a href="antremanduzenle.php">Antreman Düzenle</a></li>
							<li><a href="yarisekle.php">Yarış Ekle</a></li>
							<li><a href="yarisduzenle.php">Yarış Düzenle</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="engine/out.php"><b>Çıkış</b></a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><b>Kayıt Aktifleştir</b></h3>
				</div>
				<div class="panel-body">
					<div style="width: 327px;" class="center-block text-center">
						<form method="POST" action="engine/kayitaktif.php" enctype="multipart/form-data" name="f-ekle">
							<div id="place">
								<input type="button" class="btn btn-success pull-left" onclick="addInput()" value="Künye No Ekle">
								<input type="button" class="btn btn-danger pull-right" onclick="removeInput()" value="Künye No Çıkar">
								<br><br>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">KÜNYE NO:</span>
									<input name="kunyeno" type="text" pattern="\d*" title="Sadece rakam" class="form-control" placeholder="" required>
								</div>
							</div>
							<input type="submit" class="btn btn-primary" value="Aktifleştir">
								</form>
					</div>
			</div>
			<div style="text-align: center;">
				<?php
					if($stt=="false"){
				?>
				<b>Kayıt Aktifleştirilemedi!</b>
				<?php
					}
				?>
				<?php
					if($stt=="true"){
				?>
				<b>Kayıt başarılı bir şekilde Aktifleştirildi!</b>
				<?php
					}
				?>
				<?php
					if($stt2=="false"){
				?>
				<b>Bazı Kayıtlar Aktifleştirilemedi!</b>
				<?php
					}
				?>
				<?php
					if($stt2=="true"){
				?>
				<b>Kayıtlar başarılı bir şekilde Aktifleştirildi!</b>
				<?php
					}
				?>
			</div>
		</div>
	</body>
	<script>
		var mytext = "kunyeno";
		var mynum = 1;
		var place = $("#place");
		function addInput() {
			mynum = mynum + 1;
			var kunyeno = mytext + mynum;
			var htmlInput = "<div class='input-group'><span id='kndiv"+mynum+"' class='input-group-addon' style='width: 130px;'>KÜNYE NO "+mynum+":</span>"+
			  "<input id='kn"+mynum+"' name='"+kunyeno+"' type='text' title='Sadece rakam' class='form-control' placeholder='' required>"+
			"</div>";
			var txt1 = "<p>Text.</p>";
			place.append(htmlInput);
		}
		function removeInput() {
			if(mynum > 1){
				$("#kn"+mynum).detach();
				$("#kndiv"+mynum).detach();
				mynum = mynum -1;
			}
		}
	</script>
</html>

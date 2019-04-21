<?php
	include("engine/check.php");
	include("engine/yaris.php");
	$stt = @$_GET["stt"];
	function tr_strtoupper($text)
    {
        $search=array("ç","i","ı","ğ","ö","ş","ü");
        $replace=array("Ç","İ","I","Ğ","Ö","Ş","Ü");
        $text=str_replace($search,$replace,$text);
        $text=strtoupper($text);
        return $text;
    }
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Yarış Düzenle | Profesyonel Derby 45</title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
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
							<li><a href="kayitaktiflestir.php">Kayıt Aktifleştir</a></li>
							<li><a href="antremanekle.php">Antreman Ekle</a></li>
							<li><a href="antremanduzenle.php">Antreman Düzenle</a></li>
							<li><a href="yarisekle.php">Yarış Ekle</a></li>
							<li class="active"><a href="#">Yarış Düzenle</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="engine/out.php"><b>Çıkış</b></a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div>
				<div class="panel panel-default filterable">
					<div class="panel-heading">
						<h3 class="panel-title"><b>Yarış Düzenle</b></h3>
						<div class="pull-right">
						<button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span><b>Filtrele(Ara)</b></button>
						</div>
						<?php
							if($stt=='false'){
						?>
						<div class="text-center">
						<b>Yarış Düzenlenemedi!</b>
						</div>
						<?php
							}
						?>
						<?php
							if($stt=='true'){
						?>
						<div class="text-center">
						<b>Yarış başarılı bir şekilde düzenlendi!</b>
						</div>
						<?php
							}
						?>
					</div>
					<br>
					<table class="table text-center">
						<thead>
							<tr class="filters">
						    <th><input type="text" class="form-control text-center" placeholder="#" disabled></th>
							<th><input type="text" class="form-control text-center" placeholder="ADI" disabled></th>
							<th><input type="text" class="form-control text-center" placeholder="TARİH" disabled></th>
							<th><input type="text" class="form-control text-center" placeholder="BELGE" disabled></th>
							<th><input type="text" class="form-control text-center" placeholder="DÜZENLE" disabled></th>
							<th><input type="text" class="form-control text-center" placeholder="SİL" disabled></th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($row=mysqli_fetch_assoc($sql)){
							?>
							<tr>
							    <td>
									<?php
                            		    echo $row["num"];
									?>
								</td>
								<td>
									<?php
										echo tr_strtoupper($row["ad"]);
									?>
								</td>
								<td>
									<?php
										echo tr_strtoupper($row["tarih"]);
									?>
								</td>
								<td>
									<?php
										echo $row["dosyaadi"];
									?>
								</td>
								<td>
								    <span class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>"></span>
							    	<?php
									    include 'modal5.php';
									?>
								</td>
								<td>
    								<span class="glyphicon glyphicon-remove-circle" data-toggle="modal" data-target="#myModal2<?php echo $row['id']; ?>"></span>
    								<?php
    									include 'modal7.php';
    								?>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>

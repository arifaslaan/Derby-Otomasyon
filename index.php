<!--E-TAKİP | ÖĞRENCİ TAKİP SİSTEMİ©-->
<!--OKUL OTOMASYONU-->
<!--/>£#Arif ASLAN-->
<!--*Söz konusu bu sayfa; kullanıcı giriş sayfasıdır!-->
<?php
	$stt = @$_GET["stt"];
?>
<!DOCTYPE html>
<html lang="TR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kayıt Sistemi Giriş | Profesyonel Derby 45</title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link href="css/css.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/black/pace-theme-flash.css">
	</head>
	<body>
		<div class="container">
			<center>
				<div class="content" style="min-width: 400px;">
					<div class="account-wall">
						<h1 class="text-center login-title">Profesyonel Derby 45</h1>
						<h1 class="text-center login-title">Giriş</h1>
						<form class="form-signin" action="engine/in.php" method="POST" name="login">
							<input type="text" name="kullaniciadi" class="form-control" placeholder="Kullanıcı Adı" required autofocus>
							<input type="password" id="pass" name="parola" class="form-control" placeholder="Parola" required>
							<input type="checkbox" onclick="showpass()">Parolayı Göster
							<button class="btn btn-lg btn-primary btn-block"
							type="submit">Giriş</button>
							<?php
								if($stt=='false'){
							?>
							<b>Kullanıcı adı veya parola yanlış!</b>
							<?php
								}
							?>
							<?php
								if($stt=='out'){
							?>
							<b>Güvenli bir şekilde çıkış yapıldı!</b>
							<?php
								}
							?>
							<p></p>
						</form>
					</div>
				</div>
			</center>
		</div>
	</body>
	<script>
	    function showpass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
	</script>
</html>

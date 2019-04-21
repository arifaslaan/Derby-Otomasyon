<?php
	$stt = @$_GET["stt"];
	$stt2 = @$_GET["stt2"];
	include("engine/check.php");
?>
<?php
$sehir=array(34=>"İstanbul",6=>"Ankara",35=>"İzmir",1=>"Adana",2=>"Adıyaman",3=>"Afyon",4=>"Ağrı",68=>"Aksaray",5=>"Amasya",
7=>"Antalya",75=>"Ardahan",8=>"Artvin",9=>"Aydın",10=>"Balıkesir",74=>"Bartın",72=>"Batman",69=>"Bayburt",11=>"Bilecik",
12=>"Bingöl",13=>"Bitlis",14=>"Bolu",15=>"Burdur",16=>"Bursa",17=>"Çanakkale",18=>"Çankırı",19=>"Çorum",20=>"Denizli",
21=>"Diyarbakır",81=>"Düzce",22=>"Edirne",23=>"Elazığ",24=>"Erzincan",25=>"Erzurum",26=>"Eskişehir",27=>"Gaziantep",
28=>"Giresun",29=>"Gümüşhane",30=>"Hakkari",31=>"Hatay",76=>"Iğdır",32=>"Isparta",33=>"Mersin",78=>"Karabük",70=>"Karaman",
36=>"Kars",37=>"Kastamonu",38=>"Kayseri",71=>"Kırıkkale",39=>"Kırklareli",40=>"Kırşehir",79=>"Kilis",41=>"Kocaeli",42=>"Konya",
43=>"Kütahya",44=>"Malatya",45=>"Manisa",46=>"Maraş",47=>"Mardin",48=>"Muğla",49=>"Muş",50=>"Nevşehir",51=>"Niğde",
52=>"Ordu",80=>"Osmaniye",53=>"Rize",54=>"Sakarya",55=>"Samsun",56=>"Siirt",57=>"Sinop",58=>"Sivas",73=>"Şırnak",
59=>"Tekirdağ",60=>"Tokat",61=>"Trabzon",62=>"Tunceli",63=>"Şanlıurfa",64=>"Uşak",65=>"Van",77=>"Yalova",66=>"Yozgat",
67=>"Zonguldak");
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Kayıt Ekle | Profesyonel Derby 45</title>
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
							<li class="active"><a href="#">Kayıt Ekle<span class="sr-only"></span></a></li>
							<li><a href="kayitduzenle.php">Kayıt Düzenle</a></li>
							<li><a href="kayitaktiflestir.php">Kayıt Aktifleştir</a></li>
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
					<h3 class="panel-title"><b>Kayıt Ekle</b></h3>
				</div>
				<div class="panel-body">
					<div style="width: 327px;" class="center-block text-center">
						<form method="POST" action="engine/kayitekleme.php" enctype="multipart/form-data" name="f-ekle">
						    <input type="button" class="btn btn-success pull-left" onclick="addInput()" value="Künye No Ekle">
							<input type="button" class="btn btn-danger pull-right" onclick="removeInput()" value="Künye No Çıkar">
							<br>
							<br>
							<div id="place">
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">AD:</span>
									<input name="ad" type="text" class="form-control" placeholder="" required autofocus>
								</div>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">SOYAD:</span>
									<input name="soyad" type="text" class="form-control" placeholder="" required>
								</div>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">ŞEHİR:</span>
									<select class="form-control" name="sehir" style="width: 197px;">
										<? foreach($sehir as $key => $val){?>
										<option value="<?=$val;?>"><?=$val;?></option>
										<? }?>
									</select>
								</div>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">ÜLKE:</span>
									<select class="form-control" name="ulke" style="width: 197px;">
									  <option value="TR">TÜRKİYE</option>
									  <option value="AF">AFGANİSTAN</option>
									  <option value="DE">ALMANYA</option>
									  <option value="US">AMERİKA BİRLEŞİ</option>
									  <option value="UM">AMERİKAN MİNOR</option>
									  <option value="AS">AMERİKAN SAMOA</option>
									  <option value="AD">ANDORA</option>
									  <option value="AO">ANGOLA</option>
									  <option value="AI">ANGUİLLA</option>
									  <option value="AQ">ANTARTİKA</option>
									  <option value="AG">ANTİGUA VE BARB</option>
									  <option value="AR">ARJANTİN</option>
									  <option value="AL">ARNAVUTLUK</option>
									  <option value="AW">ARUBA</option>
									  <option value="AU">AVUSTRALYA</option>
									  <option value="AT">AVUSTURYA</option>
									  <option value="AZ">AZERBAYCAN</option>
									  <option value="BS">BAHAMALAR</option>
									  <option value="BH">BAHREYN</option>
									  <option value="BD">BANGLADEŞ</option>
									  <option value="BB">BARBADOS</option>
									  <option value="EH">BATI SAHARA</option>
									  <option value="WS">BATI SAMOA</option>
									  <option value="VG">BATI VİRGİN ADA</option>
									  <option value="BY">BELARUS</option>
									  <option value="BE">BELÇİKA</option>
									  <option value="BZ">BELİZE</option>
									  <option value="BJ">BENİN</option>
									  <option value="BM">BERMUDA</option>
									  <option value="BT">BHUTAN</option>
									  <option value="AE">BİRLEŞİK ARAP E</option>
									  <option value="BO">BOLİVYA</option>
									  <option value="BA">BOSNA HERSEK</option>
									  <option value="BW">BOTSWANA</option>
									  <option value="BV">BOUVET ADALARI</option>
									  <option value="BR">BREZİLYA</option>
									  <option value="IO">BRİTANYA HİNT A</option>
									  <option value="BN">BRUNEİ DARUSSAL</option>
									  <option value="BG">BULGARİSTAN</option>
									  <option value="BF">BURKİNA FASO</option>
									  <option value="BI">BURUNDİ</option>
									  <option value="CV">CAP VERDE</option>
									  <option value="GI">CEBELİTARIK</option>
									  <option value="DZ">CEZAYİR</option>
									  <option value="CX">CHRİSTMAS ADALA</option>
									  <option value="DJ">CİBUTİ</option>
									  <option value="CC">COCOS (KEELİNG)</option>
									  <option value="CK">COOK ADALARI</option>
									  <option value="CW">CURACAO</option>
									  <option value="TD">ÇAD</option>
									  <option value="KY">ÇAYMAN ADALARI</option>
									  <option value="CEC">ÇEÇENİSTAN</option>
									  <option value="CZ">ÇEK CUMHURİYETİ</option>
									  <option value="CN">ÇİN</option>
									  <option value="DGT">DAĞISTAN</option>
									  <option value="DK">DANİMARKA</option>
									  <option value="DM">DOMİNİK</option>
									  <option value="DO">DOMİNİK CUMHURİ</option>
									  <option value="EC">EKVADOR</option>
									  <option value="GQ">EKVATORAL GİNE</option>
									  <option value="SV">EL SALVADOR</option>
									  <option value="ID">ENDONEZYA</option>
									  <option value="ER">ERİTREA</option>
									  <option value="AM">ERMENİSTAN</option>
									  <option value="EE">ESTONYA</option>
									  <option value="ET">ETİYOPYA</option>
									  <option value="FK">FALKLAND ADALAR</option>
									  <option value="FO">FAROE ADALARI</option>
									  <option value="MA">FAS</option>
									  <option value="FJ">FİJİ</option>
									  <option value="CI">FİLDİŞİ SAHİLİ</option>
									  <option value="PH">FİLİPİNLER</option>
									  <option value="PS">FİLİSTİN BÖLGES</option>
									  <option value="FI">FİNLANDİYA</option>
									  <option value="FR">FRANSA</option>
									  <option value="GF">FRANSIZ GUYANAS</option>
									  <option value="PF">FRANSIZ POLONEZ</option>
									  <option value="GA">GABON</option>
									  <option value="GM">GAMBİYA</option>
									  <option value="GH">GANA</option>
									  <option value="GN">GİNE</option>
									  <option value="GW">GİNE-BİSSA</option>
									  <option value="GD">GRENADA</option>
									  <option value="GL">GRÖNLAND</option>
									  <option value="GP">GUADELOUPE</option>
									  <option value="GT">GUATEMALA</option>
									  <option value="GG">GUERNSEY, C.I.</option>
									  <option value="GU">GUYAM</option>
									  <option value="GY">GUYANA</option>
									  <option value="ZA">GÜNEY AFRİKA</option>
									  <option value="TF">GÜNEY FRANSA BÖ</option>
									  <option value="KR">GÜNEY KORE</option>
									  <option value="GS">GÜNEY SANDVİÇ A</option>
									  <option value="GE">GÜRCİSTAN</option>
									  <option value="HT">HAİTİ</option>
									  <option value="HM">HEARD VE MCDONA</option>
									  <option value="HR">HIRVATİSTAN</option>
									  <option value="IN">HİNDİSTAN</option>
									  <option value="NL">HOLLANDA</option>
									  <option value="AN">HOLLANDA ANTİLL</option>
									  <option value="HN">HONDURAS</option>
									  <option value="HK">HONG KONG</option>
									  <option value="IQ">IRAK</option>
									  <option value="ISE">ISKAT EDİLEN</option>
									  <option value="IM">ISLE OF MAN</option>
									  <option value="GB">İNGİLTERE</option>
									  <option value="IR">İRAN</option>
									  <option value="IE">İRLANDA</option>
									  <option value="CTL">İSKOÇYA</option>
									  <option value="ES">İSPANYA</option>
									  <option value="IL">İSRAİL</option>
									  <option value="SE">İSVEÇ</option>
									  <option value="CH">İSVİÇRE</option>
									  <option value="IT">İTALYA</option>
									  <option value="IS">İZLANDA</option>
									  <option value="JM">JAMAİKA</option>
									  <option value="JP">JAPONYA</option>
									  <option value="JE">JERSEY</option>
									  <option value="KH">KAMBOÇYA</option>
									  <option value="CM">KAMERUN</option>
									  <option value="CA">KANADA</option>
									  <option value="ME">KARADAG</option>
									  <option value="QA">KATAR</option>
									  <option value="KZ">KAZAKİSTAN</option>
									  <option value="KE">KENYA</option>
									  <option value="CY">KIBRIS</option>
									  <option value="KG">KIRGIZİSTAN</option>
									  <option value="KI">KİRİBATİ</option>
									  <option value="CO">KOLOMBİYA</option>
									  <option value="KM">KOMOROS</option>
									  <option value="CG">KONGO</option>
									  <option value="CD">KONGO CUMHURİYE</option>
									  <option value="KSV">KOSOVA</option>
									  <option value="CR">KOSTARİKA</option>
									  <option value="KW">KUVEYT</option>
									  <option value="NCY">KUZEY KIBRIS TÜ</option>
									  <option value="KP">KUZEY KORE</option>
									  <option value="MP">KUZEY MARİANA A</option>
									  <option value="CU">KÜBA</option>
									  <option value="LA">LAO</option>
									  <option value="LS">LESOTHO</option>
									  <option value="LV">LETONYA</option>
									  <option value="LR">LİBERYA</option>
									  <option value="LY">LİBYA</option>
									  <option value="LI">LİECHTENSTEİN</option>
									  <option value="LT">LİTVANYA</option>
									  <option value="LB">LÜBNAN</option>
									  <option value="LU">LÜKSEMBURG</option>
									  <option value="HU">MACARİSTAN</option>
									  <option value="MO">MACAU</option>
									  <option value="MG">MADAGASKAR</option>
									  <option value="MK">MAKEDONYA</option>
									  <option value="MW">MALAWİ</option>
									  <option value="MV">MALDİVLER</option>
									  <option value="MY">MALEZYA</option>
									  <option value="ML">MALİ</option>
									  <option value="MT">MALTA</option>
									  <option value="MH">MARSHALL ADALAR</option>
									  <option value="MQ">MARTİNİQUE</option>
									  <option value="MU">MAURİTİUS</option>
									  <option value="YT">MAYOTTE</option>
									  <option value="MX">MEKSİKA</option>
									  <option value="EG">MISIR</option>
									  <option value="FM">MİKRONESYA</option>
									  <option value="MD">MOLDOVYA</option>
									  <option value="MC">MONAKO</option>
									  <option value="MN">MONGOLYA</option>
									  <option value="MS">MONTSERRAT</option>
									  <option value="MR">MORİTANYA</option>
									  <option value="MZ">MOZAMBİK</option>
									  <option value="MM">MYANMAR</option>
									  <option value="NA">NAMİBYA</option>
									  <option value="NR">NAURU</option>
									  <option value="NP">NEPAL</option>
									  <option value="NE">NİJER</option>
									  <option value="NG">NİJERYA</option>
									  <option value="NI">NİKARAGUA</option>
									  <option value="NU">NİUE</option>
									  <option value="NF">NORFOLK ADALARI</option>
									  <option value="NO">NORVEÇ</option>
									  <option value="CF">ORTA AFRİKA CUM</option>
									  <option value="UZ">ÖZBEKİSTAN</option>
									  <option value="PK">PAKİSTAN</option>
									  <option value="PW">PALAU</option>
									  <option value="PA">PANAMA</option>
									  <option value="PG">PAPUA YENİ GİNE</option>
									  <option value="PY">PARAGUAY</option>
									  <option value="PE">PERU</option>
									  <option value="PN">PİTCAİRN ADALAR</option>
									  <option value="PL">POLONYA</option>
									  <option value="PT">PORTEKİZ</option>
									  <option value="PR">PORTO RİKO</option>
									  <option value="RE">REUNİON ADALARI</option>
									  <option value="RO">ROMANYA</option>
									  <option value="RU">RUSYA FEDERASYO</option>
									  <option value="RW">RWANDA</option>
									  <option value="KN">SAİNT KİTTS VE</option>
									  <option value="LC">SAİNT LUCİA</option>
									  <option value="VC">SAİNT VİNCENT V</option>
									  <option value="SM">SAN MARİNO</option>
									  <option value="ST">SAO TOME VE PRİ</option>
									  <option value="SN">SENEGAL</option>
									  <option value="SC">SEYŞEL ADALARI</option>
									  <option value="RS">SIRBİSTAN</option>
									  <option value="SL">SİERRA LEONE</option>
									  <option value="SG">SİNGAPUR</option>
									  <option value="SK">SLOVAKYA CUMHUR</option>
									  <option value="SI">SLOVENYA</option>
									  <option value="SB">SOLOMON ADALARI</option>
									  <option value="SO">SOMALİ</option>
									  <option value="LK">SRİ LANKA</option>
									  <option value="SH">ST. HELENA</option>
									  <option value="PM">ST. PİERRE VE M</option>
									  <option value="SD">SUDAN</option>
									  <option value="SR">SURİNAM</option>
									  <option value="SY">SURİYE</option>
									  <option value="SA">SUUDİ ARABİSTAN</option>
									  <option value="SJ">SVALBARD VE JAN</option>
									  <option value="SZ">SWAZİLAND</option>
									  <option value="CL">ŞİLİ</option>
									  <option value="TJ">TACİKİSTAN</option>
									  <option value="TZ">TANZANYA</option>
									  <option value="TH">TAYLAND</option>
									  <option value="TW">TAYVAN</option>
									  <option value="TG">TOGO</option>
									  <option value="TK">TOKELAU</option>
									  <option value="TO">TONGA</option>
									  <option value="TT">TRİNİDAD VE TOB</option>
									  <option value="TN">TUNUS</option>
									  <option value="TC">TURKS &amp; CAICOS</option>
									  <option value="TV">TUVALU</option>
									  <option value="TST">TÜRKİSTAN</option>
									  <option value="TM">TÜRKMENİSTAN</option>
									  <option value="UG">UGANDA</option>
									  <option value="UA">UKRAYNA</option>
									  <option value="OM">UMMAN</option>
									  <option value="UY">URUGUAY</option>
									  <option value="JO">ÜRDÜN</option>
									  <option value="VU">VANUATU</option>
									  <option value="VA">VATİKAN</option>
									  <option value="VE">VENEZUELA</option>
									  <option value="VN">VİETNAM</option>
									  <option value="VI">VİRGİN ADALARI</option>
									  <option value="WF">WALLİS VE FUTUN</option>
									  <option value="YE">YEMEN</option>
									  <option value="NC">YENİ KALEDONYA</option>
									  <option value="NZ">YENİ ZELANDA</option>
									  <option value="GR">YUNANİSTAN</option>
									  <option value="ZM">ZAMBİA</option>
									  <option value="ZW">ZİMBABVE</option>
									</select>
								</div>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">DURUM:</span>
									<select class="form-control" name="durum" style="width: 197px;">
										<option>Aktif</option>
										<option>Bekliyor</option>
									</select>
								</div>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">KÜNYE NO:</span>
									<input name="kunyeno" type="text" pattern="\d*" title="Sadece rakam" class="form-control" placeholder="" required>
								</div>
							</div>
							<input type="submit" class="btn btn-primary" value="Kuş Ekle">
							</form>
							</div>
					</div>
						<div style="text-align: center;">
				<?php
					if($stt=="false"){
				?>
				<b>Kayıt Eklenemedi!</b>
				<?php
					}
				?>
				<?php
					if($stt=="true"){
				?>
				<b>Kayıt başarılı bir şekilde eklendi!</b>
				<?php
					}
				?>
				<?php
					if($stt2=="false"){
				?>
				<b>Bazı Kayıtlar Eklenemedi!</b>
				<?php
					}
				?>
				<?php
					if($stt2=="true"){
				?>
				<b>Kayıtlar başarılı bir şekilde eklendi!</b>
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

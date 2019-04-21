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
<div id="myModal<?php echo $row['id']; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kayıt Düzenle</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="engine/kayitduzenleme.php?id=<?php echo $row['id'];?>" name="form">
				<div style="width: 327px;" class="center-block">
					<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">AD:</span>
						<input name="ad" type="text" class="form-control" placeholder="" value="<?php echo $row['ad']; ?>" required autofocus>
					</div>
					<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">SOYAD:</span>
						<input name="soyad" type="text" class="form-control" placeholder="" value="<?php echo $row['soyad']; ?>" required>
					</div>
					<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">KÜNYE NO:</span>
						<input name="kunyeno" type="text" pattern="\d*" title="Sadece rakam" class="form-control" placeholder="" value="<?php echo $row['kunyeno']; ?>" required>
					</div>
					<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">ŞEHİR:</span>
						<select class="form-control" name="sehir" style="width: 197px;">
							<? foreach($sehir as $key => $val){?>
							<option value="<?=$val;?>" <? if($val==$row['sehir']){echo ' selected';}?>><?=$val;?></option>
							<? }?>
						</select>
					</div>
					<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 130px;">DURUM:</span>
						<select class="form-control" name="durum" style="width: 197px;" value="<?php echo $row['durum']; ?>">
							<option <?php if($row['durum']=='Aktif') echo 'selected'?>>Aktif</option>
							<option <?php if($row['durum']=='Bekliyor') echo 'selected'?>>Bekliyor</option>
						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-success pull-left" value="Düzenle">
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
			</div>
		</div>
	</div>
</div>
<div id="myModal<?php echo $row['id']; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kayıt Düzenle</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="engine/antremanduzenle.php?id=<?php echo $row['id'];?>" enctype="multipart/form-data" name="ant-duzenle">
							<div id="place" style="display:flex; justify-content:center; align-items:center; flex-direction: column">
							    <p>Dosya adının Türkçe karekter ve boşluk içermemesine dikkat ediniz!</p>
							    <p>Örn: 5kmgelen.htm</p>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 160px;">ANTREMAN ADI:</span>
									<input name="antadi" type="text" class="form-control" placeholder="" value="<?php echo $row['ad']; ?>" required>
								</div>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 160px;">ANTREMAN TARİHİ:</span>
									<input name="anttarih" type="text" class="form-control" placeholder="" value="<?php echo $row['tarih']; ?>" required>
								</div>
								<div class="input-group"><span id="addon1" class="input-group-addon" style="width: 160px;">DOSYA:</span>
									<input type="file" name="dosya" required>
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
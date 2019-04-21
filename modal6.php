<div id="myModal2<?php echo $row['id']; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Antreman Sil</h4>
			</div>
			<div class="modal-body">
				<h4>YARIŞ ADI: <?php echo tr_strtoupper($row['ad']); ?></h4>
				<h4>TARİH: <?php echo tr_strtoupper($row['tarih']); ?></h4>
				<h4>DOSYA: <?php echo $row['dosyaadi']; ?></h4>
        <h2 style="color: darkred">Kayıt silinsin mi?</h2>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" onclick="location.href='engine/antremansilme.php?id=<?php echo $row['id']; ?>'">Evet</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
      </div>
		</div>
	</div>
</div>
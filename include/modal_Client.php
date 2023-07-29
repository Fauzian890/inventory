<div id="myModal" class="modal">
    <div class="modal-content">
		<form onsubmit="return alert('Konsumen berhasil ditambahkan.');" action="../actions/client_add.php" method="POST">
		    <div class="header">
				<h3 id="Title">Tambah Konsumen</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
			    <input type="text" name="nama_konsumen" class="form-control" placeholder="Nama Konsumen">
			</div>
			<div class="form-group">
				<input type="text" name="alamat_konsumen" class="form-control"  placeholder="Alamat Konsumen">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Add</button>
			</div>
		</form>
	</div>
</div>
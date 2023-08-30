<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form onsubmit="return alert('Supplier successfully added.');" action="../actions/supplier_add.php" method="POST">
			<div class="header">
				<h3 id="Title">Tambah Supplier</h3>
				<span class="close">&times;</span>
			</div>
			
            <div class="form-group">
				<input type="text" name="nama_supplier"class="form-control" placeholder="Nama Supplier">
			</div>
			<div class="form-group">
				<input type="text" name="alamat_supplier"class="form-control"  placeholder="Alamat Supplier">
			</div>
			<div class="form-group">
				<input type="text" name="no_hp" class="form-control"  placeholder="Nomor HP">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Add</button>
			</div>
		</form>
	</div>
</div>
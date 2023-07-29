<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form onsubmit="return alert('Kategori successfully added.');" action="../actions/kategori_add.php" method="POST" enctype="multipart/form-data">

			<div class="header">
				<h3 id="Title">Create Kategori</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="nama_kategori" placeholder="Nama kategori">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Add</button>
			</div>
		</form>
	</div>
</div>

<div id="updateModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form action="../actions/kategori_update.php" method="POST">

			<div class="header">
				<h3 id="Title">Update Kategori</h3>
				<span class="close">&times;</span>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Namakategori">
			</div>
			
			<!-- Product ID --><input name="id_kategori" id="id_kategori" type="hidden">
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Update Product</button>
			</div>
		</form>
	</div>
</div>
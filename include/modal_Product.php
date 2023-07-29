<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form onsubmit="return alert('Product successfully added.');" action="../actions/product_add.php" method="POST">

			<div class="header">
				<h3 id="Title">Create Kopi</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="namakopi" placeholder="Namakopi">
			</div>
			<div class="form-group">
				<select required></select>
				<option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
				<?php
				$sql = "SELECT * FROM kategori WHERE id_kategori !='".$row['id_kategori']."'";
				$cquery = $conn->query($sql);
				while($crow=$cquery->fetch_array()){
					?>
					<option value="<?php echo $crow['id_kategori'] ?>"><?php echo $crow['nama_kategori'] ?></option>
					<?php
				}
				?>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="stok" placeholder="Stok">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="harga" placeholder="Harga">
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
		<form action="../actions/product_update.php" method="POST">

			<div class="header">
				<h3 id="Title">Update Kopi</h3>
				<span class="close">&times;</span>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="namakopi" placeholder="Namakopi">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="stok" placeholder="Stok">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="harga" placeholder="Harga">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="productunit" placeholder="Stok">
			</div>
			<!-- Product ID --><input name="ProdId" id="ProdId" type="hidden">
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Update Kopi</button>
			</div>
		</form>
	</div>
</div>
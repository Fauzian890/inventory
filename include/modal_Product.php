<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form onsubmit="return alert('Product successfully added.');" action="../actions/product_add.php" method="POST">

			<div class="header">
				<h3 id="Title">Tambah Data Kopi</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="namakopi" placeholder="Namakopi">
			</div>
			<div class="form-group">
				<select class="form-select mb-2" name='kategori' required>
					<?php 
						$sql = "SELECT * FROM kategori"; //get all kateegori
						$result = $conn->query($sql);
					?>
					<?php while($row = $result->fetch_assoc()): ?>
						<option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
					<?php endwhile ?>
				</select>
				
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
			</div>
			<div class="form-group">
				<input type="number" class="form-control" name="stok" placeholder="Stok">
			</div>
			<div class="form-group">
				<input type="number" class="form-control" name="harga" placeholder="Harga">
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
				<input type="text" id='namakopi' class="form-control" name="namakopi" placeholder="Namakopi">
			</div>
			<div class="form-group">
				<select class="form-select mb-2" id='kategori' name='kategori' required>
					<?php 
						$sql = "SELECT * FROM kategori"; //get all kateegori
						$result = $conn->query($sql);
					?>
					<?php while($row = $result->fetch_assoc()): ?>
						<option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
					<?php endwhile ?>
				</select>
				
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id='deskripsi' name="deskripsi" placeholder="Deskripsi">
			</div>
			<div class="form-group">
				<input type="number" id='stok' class="form-control" name="stok" placeholder="Stok">
			</div>
			<div class="form-group">
				<input type="number" id='harga' class="form-control" name="harga" placeholder="Harga">
			</div>
			<!-- Product ID --><input name="id_kopi" id="id_kopi" type="hidden">
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Update Product</button>
			</div>
		</form>
	</div>
</div>
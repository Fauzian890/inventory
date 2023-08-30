<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form id="add-barang-keluar" action="../actions/barangkeluar_add.php" method="POST">
			<div class="header">
				<h3 id="Title">Tambah Barang Keluar</h3>
				<span class="close">&times;</span>
			</div>
			
            
			<div class="form-group">
				<input type="hidden" name="UserID" id="UserID" value="<?php echo $_SESSION['UserID'] ?>"></input>
				<select class="form-select mb-2" id='konsumen' name='konsumen' required>
					<?php 
						$sql = "SELECT * FROM konsumen"; //get all kateegori
						$result = $conn->query($sql);
					?>
					<?php while($row = $result->fetch_assoc()): ?>
						<option value="<?php echo $row['id_konsumen'] ?>"><?php echo $row['nama_konsumen'] ?></option>
					<?php endwhile; ?>
				</select>
				<select class="form-select mb-2" id='kopi' name='kopi' required>
					<?php 
						$sql = "SELECT * FROM kopi"; //get all kateegori
						$result = $conn->query($sql);
					?>
					<?php $stockData = array(); while($row = $result->fetch_assoc()): $stockData[$row['id_kopi']] = $row['stok']; ?>
						<option value="<?php echo $row['id_kopi'] ?>"><?php echo $row['namakopi'] ?></option>
					<?php endwhile; $stockDataJSON = json_encode($stockData); ?>
				</select>
				
				<div class="form-group">
				<input type="number" id='qty' class="form-control" name="qty" min="0" placeholder="Quantity">
			</div>
			</div>
			
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Add</button>
			</div>
		</form>
	</div>
</div>

<script>
$("#add-barang-keluar").submit(function(e){
    const kopiDropdown = document.getElementById('kopi');
    const qtyInput = document.getElementById('qty');
        
        // Simulate getting stock information from the server
        // You might need to replace this with an actual API call
        const stockData = <?php echo $stockDataJSON; ?>;
        const selectedKopiId = kopiDropdown.value;
        const selectedQty = parseInt(qtyInput.value, 10);
        const availableStock = stockData[selectedKopiId];
        
        if (selectedQty > availableStock) {
            alert('Jumlah yang dimasukkan melebihi stok yang tersedia.');
            return false; // Prevent form submission
        } else {
            alert('Barang keluar berhasil ditambahkan.');
		}
});
</script>

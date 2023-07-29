<html>
	<?php $page = 'viewPage'; include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<body>
		<div class="label productList">Data Kopi
			<button id="myBtn">Add</button>
				<!-- The Modal -->
				<?php include('../include/modal_Product.php');?>
		</div>
		<table id="product_list" class="display">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama Kopi</th>
					<th>Kategori</th>
					<th>Deskripsi</th>
					<th>Harga</th>	
					<th>stok</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM kopi"; //get all products
						$result = $conn->query($sql);

						$nomor = '1';

						$sql2 = "SELECT * FROM kopi LEFT JOIN kategori ON kategori.id_kategori=kopi.id_kategori ORDER BY kopi.id_kategori ASC";
						$query2 = $conn->query($sql2);
					?>

					<?php if ($query2->num_rows > 0): ?>
						<?php while($row = $query2->fetch_assoc()): ?>
							<tr>
								<td><?php echo $nomor++; ?></td>
								<td><?php echo $row["namakopi"]; ?></td>
								<td><?php echo $row["deksripsi"]; ?></td>	
								<td><?php echo $row["stok"]; ?></td>
								<td><?php echo number_format($row["harga"], 2); ?></td>		
								<td><button class="action update" 
								data-id="<?php echo $row["namakopi"]; ?>"
								data-desc="<?php echo $row["deskripsi"]; ?>"
								data-unit="<?php echo $row["stok"]; ?>"
								data-uprice="<?php echo $row["harga"]; ?>"
								>Update</button>
								<a onclick="return alert('Product Deleted');" href="../actions/product_delete.php?pid=<?php echo $row["ProdId"];?>" class="action delete">Delete</td>	
							</tr>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php
						$conn->close();
					?>
				</tbody>
		</table>
		
	<script>
			$(document).ready( function () {
					$('#product_list').DataTable();
			});
	</script>
	<script src="../include/modalscript.js"></script>
	</body>
</html> 
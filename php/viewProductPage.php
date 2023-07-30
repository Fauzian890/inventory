<html>
	<?php $page = 'viewPage'; include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<body style="background:url('https://img.freepik.com/free-photo/right-corner-coffee-beans-with-copy-space_23-2148255026.jpg?w=826&t=st=1690722306~exp=1690722906~hmac=857df898b9099e272b7c4738dd9a2e88d4b1ef4aa3c55a6ebd3c8b798e20c916');background-repeat:no-repeat;
background-position: center center;background-size: cover;">
		<div class="label productList">Data Kopi
			<button id="myBtn" style="width:100px;">+ Tambah</button>
				<!-- The Modal -->
				<?php include('../include/modal_Product.php');?>
		</div>
		<table id="product_list" class="dataTables_wrapper no-footer">
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
						$sql = "SELECT * FROM kopi JOIN kategori"; //get all products
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
								<td><?php echo $row["nama_kategori"]; ?></td>
								<td><?php echo $row["deskripsi"]; ?></td>	
								<td><?php echo number_format($row["harga"]); ?></td>		
								<td><?php echo $row["stok"]; ?></td>
								<td><button class="action update" 
								data-id-kopi="<?php echo $row["id_kopi"]; ?>"
								data-namakopi="<?php echo $row["namakopi"]; ?>"
								data-id-kategori="<?php echo $row["id_kategori"]; ?>"
								data-deskripsi="<?php echo $row["deskripsi"]; ?>"
								data-stok="<?php echo $row["stok"]; ?>"
								data-harga="<?php echo $row["harga"]; ?>"
								>Update</button>
								<a onclick="return alert('Data kopi dihapus');" href="../actions/product_delete.php?kopi=<?php echo $row["id_kopi"];?>" class="action delete">Delete</td>	
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
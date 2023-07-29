<html>
	<?php 
		include('../include/header.php');
		include('../include/navbar.php');	
		include('../database/db.php');
	
		$s = "SELECT * FROM products"; 
		$res = $conn->query($s);	
	?>

<body>
	<div class="label clientOrder">List Barang Keluar
		<button id="myBtn">Add</button>
		<?php include('../include/modal_barangkeluar.php');?>
	</div>
	
	<table id="clientOrder_list" class="display">
		<thead>
			<tr>
				<th>Id</th>
				<th>Konsumen</th>
				<th>Nama Kopi</th>
				<th>Quantity</th>
				<th>Tanggal</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
					$sql = "SELECT * FROM barangkeluar JOIN kopi ON barangkeluar.id_kopi=kopi.id_kopi JOIN konsumen ON barangkeluar.id_konsumen=konsumen.id_konsumen";
					$result = $conn->query($sql);
				?>
			<?php if ($result->num_rows > 0): ?>
				<?php while($row = $result->fetch_assoc()): ?>
						<tr>
								<td><?php echo $row["id_barangkeluar"]; ?></td>
								<td><?php echo $row["nama_konsumen"]; ?></td>
								<td><?php echo $row["namakopi"]; ?></td>		
								<td><?php echo $row["qty"]; ?></td>		
								<td><?php echo $row["tanggal_barangkeluar"]; ?></td>		
								<td>

									<a onclick="return alert('Barang keluar berhasil dihapus');" href="../actions/barangkeluar_delete.php?id_barangkeluar=<?php echo $row["id_barangkeluar"]; ?>">
										<button class="action delete" href="">Delete</button>
									</a>
								</td>
							</tr>

				<?php endwhile; ?>
			<?php endif; ?>

			<?php $conn->close(); ?>
					
		</tbody>
	</table>
</body>

<?php include('../include/modalscript_orderClient.php');?>
</html>
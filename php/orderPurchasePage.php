<html>
	<?php 
		include('../include/header.php');
		include('../include/navbar.php');
		include('../database/db.php');
	?>

<body>
	<div class="label clientOrder">
		List Barang Masuk
		<button id="myBtn" style="width:100px;">Add</button>
		<!-- The Modal -->
		<?php include('../include/modal_BarangMasuk.php');?>
	</div>
		<table id="purchaseOrder_list" class="display">
			<thead>
				<tr>
					<th>Id</th>
					<th>Supplier</th>
					<th>Nama Kopi</th>
					<th>Quantity</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$sql = "SELECT * FROM barangmasuk JOIN kopi ON barangmasuk.id_kopi=kopi.id_kopi JOIN supplier ON barangmasuk.id_supplier=supplier.id_supplier";
					$result = $conn->query($sql);
				?>
					<?php if ($result->num_rows > 0): ?>
						<?php while($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row["id_barangmasuk"]; ?></td>
								<td><?php echo $row["nama_supplier"]; ?></td>
								<td><?php echo $row["namakopi"]; ?></td>		
								<td><?php echo $row["qty"]; ?></td>		
								<td><?php echo $row["tanggal_barangmasuk"]; ?></td>	
								<td><?php echo $row["status"]; ?></td>	
								<td>

									<a onclick="return alert('Barang masuk berhasil dihapus');" href="../actions/barangmasuk_delete.php?id_barangmasuk=<?php echo $row["id_barangmasuk"]; ?>">
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
<script>
			$(document).ready( function () {
					$('#purchaseOrder_list').DataTable();
			});
	</script>
	<script src="../include/modalscript.js"></script>
	<?php include('../include/modalscript_orderPurchase.php');?>
</html>

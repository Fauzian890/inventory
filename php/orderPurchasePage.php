<html>
	<head>
		<title>List Barang Masuk </title>
	</head>
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
	<form class="label" style="margin-bottom:-5px;font-size: 16px;text-align:right;">
		Filter Tanggal: 	
		<input type="date" name="min" style="margin-left: 8px;" /> - 
		<input type="date" name="max" />
		<button class="btn btn-primary btn-sm">Terapkan</button>
		<a href="/inventory/php/orderPurchasePage.php" class="btn btn-secondary btn-sm">Reset</a>
	</form>
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
					$sql = "";
					if(isset($_GET['min']) && isset($_GET['max'])) {
						$sql .= "SELECT * FROM barangmasuk JOIN kopi ON barangmasuk.id_kopi=kopi.id_kopi JOIN supplier ON barangmasuk.id_supplier=supplier.id_supplier WHERE tanggal_barangmasuk BETWEEN '" . $_GET['min'] . "' AND '" . $_GET['max'] ."'";
					} else {
						$sql .= "SELECT * FROM barangmasuk JOIN kopi ON barangmasuk.id_kopi=kopi.id_kopi JOIN supplier ON barangmasuk.id_supplier=supplier.id_supplier";
					}
					
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
									<?php if ($row["status"] != 'DISETUJUI') {?>
                                    <a onclick="return alert('Barang masuk berhasil dihapus');" href="../actions/barangmasuk_delete.php?id_barangmasuk=<?php echo $row["id_barangmasuk"]; ?>">
										<button class="action delete" href="">Delete</button>
									</a>
                                    <?php } ?>
									
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
					$('#purchaseOrder_list').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
		});
			});
	</script>
	<script src="../include/modalscript.js"></script>
	<?php include('../include/modalscript_orderPurchase.php');?>
</html>

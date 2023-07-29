<html>
	<?php $page = 'viewPage'; include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<link href="../css/ViewOrder.css" rel="stylesheet" type="text/css" />
	<body>
		<div class="label SupplierList">Data Supplier
			<button id="myBtn" style="width:100px;">+ Tambah</button>
				<!-- The Modal -->
				<?php include('../include/modal_Supplier.php'); ?>
		</div>
		<table id="supplier_list" class="display">
			<thead>
				<tr>
					<th>Id Supplier</th>
					<th>Nama Supplier</th>
					<th>Alamat</th>
					<th>No HP</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM supplier"; //get all products
						$result = $conn->query($sql);
					?>

					<?php if ($result->num_rows > 0): ?>
						<?php while($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row["id_supplier"]; ?></td>
								<td><?php echo $row["nama_supplier"]; ?></td>	
								<td><?php echo $row["alamat_supplier"]; ?></td>
								<td><?php echo $row["no_hp"]; ?></td>	
								<td><a onclick="return alert('Supplier Deleted');" href="../actions/supplier_delete.php?id_supplier=<?php echo $row["id_supplier"];?>" class="action delete">Delete</td>	
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
					$('#supplier_list').DataTable();
					} );
				</script>
				<script src="../include/modalscript.js"></script>
	</body>
	
</html>
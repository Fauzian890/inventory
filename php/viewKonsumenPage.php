<html>
	<?php $page = 'viewPage'; include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<?php include('../database/db.php');?> 
	<body>
		<div class="label clientList">Data Konsumen
			<button id="myBtn" style="width:100px;">+ Tambah</button>
			<!-- The Modal -->
				<?php include('../include/modal_Client.php');?>
		</div>
		<table id="client_list" class="display">
			<thead>
				<tr>
					<th>Id Konsumen</th>
					<th>Nama Konsumen</th>
					<th>Alamat</th>
					<th>Action</th>
				</tr>
			</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM konsumen"; //get all products
						$result = $conn->query($sql);
					?>

					<?php if ($result->num_rows > 0): ?>
						<?php while($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row["id_konsumen"]; ?></td>
								<td><?php echo $row["nama_konsumen"]; ?></td>	
								<td><?php echo $row["alamat_konsumen"]; ?></td>
								<td><a onclick="return alert('Konsumen berhasil dihapus');" href="../actions/client_delete.php?id_konsumen=<?php echo $row["id_konsumen"];?>" class="action delete">Delete</td>	
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
				$('#client_list').DataTable();
				} );
			</script>
			<script src="../include/modalscript.js"></script>
	</body>
	
</html>
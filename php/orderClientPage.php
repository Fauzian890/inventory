<html>
	<head>
		<title>List Barang Keluar </title>
	</head>
	<?php 
		include('../include/header.php');
		include('../include/navbar.php');	
		include('../database/db.php');
	?>

<body style="background:url('https://img.freepik.com/free-photo/right-corner-coffee-beans-with-copy-space_23-2148255026.jpg?w=826&t=st=1690722306~exp=1690722906~hmac=857df898b9099e272b7c4738dd9a2e88d4b1ef4aa3c55a6ebd3c8b798e20c916');background-repeat:no-repeat;
background-position: center center;background-size: cover;">
	<div class="label clientOrder">List Barang Keluar
		<button id="myBtn" style="width:100px;">+ Tambah</button>
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
				<?php while($row = $result->fetch_assoc()): 
						$data[] = $row; ?>
						<tr>
								<td><?php echo $row["id_barangkeluar"]; ?></td>
								<td><?php echo $row["nama_konsumen"]; ?></td>
								<td><?php echo $row["namakopi"]; ?></td>		
								<td><?php echo $row["qty"]; ?></td>		
								<td>
									<?php
										$dt = new DateTime($row["tanggal_barangkeluar"], new DateTimeZone('Asia/Jakarta'));
										echo $dt->format('d/m/Y H:i');
									?>
								</td>		
								<td>

									<a onclick="return alert('Barang keluar berhasil dihapus');" href="../actions/barangkeluar_delete.php?id_barangkeluar=<?php echo $row["id_barangkeluar"]; ?>&qty=<?php echo $row["qty"]; ?>&id_kopi=<?php echo $row["id_kopi"]; ?>">
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
					$('#clientOrder_list').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
            extend: 'print',
			customize: function ( win ) {
 
                    $(win.document.body).find( 'table' )
                        .append( `
			<tfoot>
				<tr><th colspan='3'></th><th colspan='2' style='text-align:center;'>Total Barang Keluar</th></tr>
				<tr><th colspan='3'></th><th>Nama</th><th>Quantity</th></tr>
			<?php 
$totals = array();
			foreach ($data as $d) {
				$namakopi = $d["namakopi"];
				$qty = $d["qty"];

				if (isset($totals[$namakopi])) {
					$totals[$namakopi] += $qty;
				} else {
					$totals[$namakopi] = $qty;
				}
			};
			foreach ($totals as $namakopi => $total_qty) { ?>
				<tr>
					<td colspan='3'></td>
					<td><?php echo $namakopi ?></td>
					<td><?php echo $total_qty ?></td>
				</tr>
				<?php } ?>
			</tfoot>` )
                },
            text: 'Cetak',
            exportOptions: {
                modifier: {
                    page: 'current'
                },
				columns: [ 0, 1, 2, 3, 4 ]
            }
        }
        ]
		});
			});
	</script>
	<script src="../include/modalscript.js"></script>

<?php include('../include/modalscript_orderClient.php');?>
</html>
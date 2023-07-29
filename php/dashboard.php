<html>

<?php $page = 'dashboard';
include('../include/header.php'); ?>
<?php include('../include/navbar.php'); ?>
<?php include('../database/db.php'); ?>
<link href="../css/dashboard.css" rel="stylesheet" type="text/css" />

<body>
	<div class="container">
		<div class="row dashboard">
			<div class="col-sm-12">DASHBOARD</div>
		</div>
		<div class="row analytics">
			<div class="col-sm-4">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<img src="../img/1.png" class="col-sm-3" alt="" id="icon">
							<?php
							$sql = "SELECT * FROM kopi";
							if ($result = mysqli_query($conn, $sql)) {
								$rowcount = mysqli_num_rows($result);
							} ?>
							<p class="card-text"><?php echo "<span id='supplier'> $rowcount </span>"  . "<br>Data Kopi" ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<img src="../img/3.png" class="col-sm-3" alt="" id="icon">
							<?php
							$sqll = "SELECT * FROM supplier";
							if ($Result = mysqli_query($conn, $sqll)) {
								$rowcounter = mysqli_num_rows($Result);
							}
							?>
							<p class="card-text"><?php echo "<span id='supplier'> $rowcounter </span>"  . "<br>Data Supplier" ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<img src="../img/2.png" class="col-sm-3" alt="" id="icon">

							<?php
							$Sqll = "SELECT * FROM konsumen";
							if ($Resultt = mysqli_query($conn, $Sqll)) {
								$Rowcounter = mysqli_num_rows($Resultt);
							}
							?>
							<p class="card-text"><?php echo "<span id='supplier'> $Rowcounter </span>"  . "<br>Data Konsumen" ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row orders">
			<div class="col-sm-6">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title orders">Data Barang masuk</h5>
							<table id="recent_clientorder" class="display">
								<thead>
									<tr>
										<th>Id Barang Masuk</th>
										<th>Nama Supplier</th>
										<th>Nama Kopi </th>
										<th>Status </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM barangmasuk JOIN kopi ON barangmasuk.id_kopi=kopi.id_kopi JOIN supplier ON barangmasuk.id_supplier=supplier.id_supplier order by barangmasuk.id_barangmasuk DESC LIMIT 3";
									$result = $conn->query($sql);
									?>
									<?php if ($result->num_rows > 0) : ?>
										<?php while ($row = $result->fetch_assoc()) : ?>
											<tr>
												<td><?php echo $row["id_barangmasuk"]; ?></td>
												<td><?php echo $row["nama_supplier"]; ?></td>
												<td><?php echo $row["namakopi"]; ?></td>
												<td><?php echo $row["status"]; ?></td>
											</tr>
										<?php endwhile; ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title orders">Data Barang Keluar</h5>
							<table id="recent_purchaseorder" class="display">
								<thead>
										<tr>
										<th>Id Barang Keluar</th>
										<th>Nama Konsumen</th>
										<th>Nama Kopi </th>
									</tr>
								</thead>
								<tbody>
								<?php
									$sql = "SELECT * FROM barangkeluar JOIN kopi ON barangkeluar.id_kopi=kopi.id_kopi JOIN konsumen ON barangkeluar.id_konsumen=konsumen.id_konsumen order by barangkeluar.id_barangkeluar DESC LIMIT 3";
									$result = $conn->query($sql);
									?>
									<?php if ($result->num_rows > 0) : ?>
										<?php while ($row = $result->fetch_assoc()) : ?>
											<tr>
												<td><?php echo $row["id_barangkeluar"]; ?></td>
												<td><?php echo $row["nama_konsumen"]; ?></td>
												<td><?php echo $row["namakopi"]; ?></td>
											</tr>
										<?php endwhile; ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
<script>
	$(document).ready(function() {
		$('#recent_clientorder').DataTable();
		$('#recent_purchaseorder').DataTable();

	});
	var table = $('#recent_clientorder').DataTable({
		pageLength: 3,
		lengthMenu: [
			[3],
			[3]
		]
	})
	var potable = $('#recent_purchaseorder').DataTable({
		pageLength: 3,
		lengthMenu: [
			[3],
			[3]
		]
	})
</script>

</html>
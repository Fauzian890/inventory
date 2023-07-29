<html>
<?php $page = 'viewPage';
include('../include/header.php'); ?>
<?php include('../include/navbar.php'); ?>
<link href="../css/viewPage.css" rel="stylesheet" type="text/css" />

<body>
	<div class="card-group">
			
		  <div class="card">
			  <div class="card-body">
				  <h5 class="card-title">Kopi</h5>
					<img src="../img/kopi.jpg" class="card-img-top" alt="..." style="width: 200px ;height: 190px;">
					<a href="viewProductPage.php"><button class="buttons-view">View</button></a>
				</div>
		  </div>
		  <div class="card">
			  <div class="card-body">
				  <h5 class="card-title">Kategori</h5>
					<img src="../img/kategori.jpg" class="card-img-top" alt="..." style="width: 200px ;height: 190px;">
					<a href="viewKategoriPage.php"><button class="buttons-view">View</button></a>
				</div>
		  </div>
		  <div class="card">
			  <div class="card-body">
				  <h5 class="card-title">Konsumen</h5>
					<img src="../img/konsumen.jpg" class="card-img-top" alt="..." style="width: 200px ;height: 190px;">
					<a href="viewClientPage.php"><button class="buttons-view">View</button></a>
			  </div>
		  </div>
			
		  <div class="card">
			  <div class="card-body">
				  <h5 class="card-title">Supplier</h5>
					<img src="../img/supplier.png" class="card-img-top" alt="..." style="width: 200px ;height: 190px;">
					<a href="viewSupplierPage.php"><button class="buttons-view">View</button></a>
				</div>
		  </div>
		</div>
</body>

</html>
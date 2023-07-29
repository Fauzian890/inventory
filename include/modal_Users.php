<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form onsubmit="return alert('Admin berhasil ditambahkan.');" action="../actions/admin_add.php" method="POST" enctype="multipart/form-data" autocomplete='off'>

			<div class="header">
				<h3 id="Title">Buat Admin Baru</h3>
				<span class="close">&times;</span>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="userName" placeholder="Username">
				<input type="password" class="form-control" name="userPassword" placeholder="Password">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>

<div id="updateModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form action="../actions/admin_update.php" method="POST">

			<div class="form-group">
				<input type="text" class="form-control" id="userName" name="userName" placeholder="Username">
				<input type="text" class="form-control" id="userPassword" name="userPassword" placeholder="Password">
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
			</div>
			
			<!-- Product ID --><input name="userID" id="userID" type="hidden">
		</form>
	</div>
</div>
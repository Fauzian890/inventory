<link href="../css/navbar.css" rel="stylesheet" type="text/css" />
<div class="wrapper">
	<nav id="sidebar">
		<div class="sidebar-header">
			<img id="logo" src="../img/logo.png">
			<h1 id="title">WARGONDES<br><span id="tagline">GA NGOPI GA ASIK</span></h1>
		</div>
		<ul class="list-unstyled components">
			<li class="<?php if ($page == 'dashboard') {
							echo 'active';
						} ?>">
				<a href="dashboard.php" id="label">
					<i class="fi fi-rr-apps"></i>Dashboard</a>
			</li>
			<?php if ($_SESSION['role'] == 'admin') {?>
			<li class="<?php if ($page == 'viewPage') {
							echo 'active';
						} ?>">
				<a href="viewPage.php" id="label">
					<i class="fi fi-rr-search"></i>View</a>
			</li>
			<li class="<?php if ($page == 'orderPage') {
							echo 'active';
						} ?>">
				<a href="orderPage.php" id="label">
					<i class="fi fi-rr-shopping-cart"></i>Order</a>
			</li>
			<?php } ?>
			
			<?php if ($_SESSION['role'] == 'pemilik') {?>
				<li class="<?php if ($page == 'validasiBarangMasuk') {
							echo 'active';
						} ?>">
				<a href="validasiBarangMasuk.php" id="label">
					<i class="fi fi-rr-box"></i>Barang Masuk</a>
			</li>
			<li class="<?php if ($page == 'kelolaAdmin') {
							echo 'active';
						} ?>">
				<a href="kelolaAdmin.php" id="label">
					<i class="fi fi-rr-users"></i>Kelola Admin</a>
			</li>
			<?php } ?>
			<li class="<?php if ($page == 'settingPage') {
							echo 'active';
						} ?>">
				<a href="settingPage.php" id="label">
					<i class="fi fi-rr-settings-sliders"></i>Settings</a>
			</li>
			<li>
				<a id="label" onclick="return confirm('You are about to Log out, click YES to proceed');" href="../actions/logout.php">
					<i class="bi bi-box-arrow-in-left" style="margin-right:6px;font-size: 28px;"></i>Log out</a>
			</li>
		</ul>
		<div class="user">
			<i class="bi bi-person-circle"></i>
			<div>
				
			<div class="username"><?php echo $_SESSION["user"] ?></div>
			<div class="role"><?php echo $_SESSION["role"] ?></div>
			</div>
		</div>
	</nav>
</div>

<style>
	.user {
		color: black;
		display: flex;
		width: 100%;
		justify-content: center;
		align-items: center;
		position: absolute;
		bottom: 32px;
	}

	.user i {
		font-size: 40px;
		margin-right: 16px;
	}

	.user .username {
		font-weight: bold;
	}

	.user .role {
		font-size: 14px;
		margin-top: -2px;
	}
</style>
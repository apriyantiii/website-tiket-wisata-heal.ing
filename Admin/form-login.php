<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Beranda Utama </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<style type="text/css">
		body {
			font-family: 'Poppins', sans-serif;
			font-size: 15px;
			color: black;
			background-color: white;
		}
	</style>
	<header>
		<div class="header">
			<div class="quote">
				<a> Heal.ing - Website Penjualan Tiket Wisata di Malang </a>
			</div>
		</div>
	</header>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<div class="container">
		<div class="card-body">
			<h2 class="card-title">Log In</h2>
			<h3 class="card-subtitle text-muted mb-3 fw-bold">Mohon isi data berikut :</h3>
			<form method="POST" action="simpan.php">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<div class="mb-4">
					<label for="username" class="form-label">Username*</label>
					<input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password*</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password Min 8 karakter">
				</div>
				<div class="d-grid">
					<br>
					<center><a href="berandaadmin.php"><button type="button" class="btn btn-secondary">Login</button></a>
				</div>
			</form>
		</div>
	</div>

	<footer>
		<div class="footer">
			<div class="quote">
				<a>By Kelompok 3 : Rhizma Elliza Putri - Narti Apriyanti</a>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>
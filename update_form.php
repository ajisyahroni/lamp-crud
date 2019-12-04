<html>

<head>
	<title>Create</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container">

	<h2>CREATE DATA MAHASISWA</h2>
	<br />
	<a class="btn btn-sm btn-info" href="read.php">KEMBALI</a>
	<br />
	<br />
	<h3>silahkan edit data DATA MAHASISWA</h3>


	<?php
	// include 'conn.php';
	// $data = mysqli_query($myconn,"select * from basic_crud");

	$id = $_GET['id'];
	$nama = $_GET['name'];
	$nim = $_GET['nim'];
	$bd = $_GET['birth_date'];
	$alamat = $_GET['address'];
	?>

	<form method="post" action="update.php">
		<input type="hidden" value="<?php echo $id ?>">
		<table>
			<tr>
				<td>Nama</td>
				<td><input class="form-control" type="text" name="name" value="<?php echo $nama ?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input class="form-control" type="text" name="nim" value="<?php echo $nim ?>"></td>
			</tr>
			<tr>
				<td>birth_date</td>
				<td><input class="form-control" type="date" name="birth_date" value="<?php echo $bd ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input class="form-control" type="text" name="address" value="<?php echo $alamat ?>"></td>
			</tr>
			<tr style="display:none;">
				<td>id yang disembunyikan</td>
				<td><input type="text" name="id" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-success" type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>

</html>
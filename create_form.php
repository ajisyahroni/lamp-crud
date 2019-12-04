<html>

<head>
	<title>Create</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container">

	<h2>CREATE DATA MAHASISWA</h2>
	<br />
	<a href="read.php">KEMBALI</a>
	<br />
	<br />
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="create.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input class="form-control" type="text" name="name"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input class="form-control" type="text" name="nim"></td>
			</tr>
			<tr>
				<td>birth_date</td>
				<td><input class="form-control" type="date" name="birth_date"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input class="form-control" type="text" name="address"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-success" type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>

</html>
<html>

<head>
	<title>CRUD PHP with mysqli driver</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container">

	<h2>READ DATA MAHASISWA</h2>
	<br />
	<a href="create_form.php">+ TAMBAH MAHASISWA</a>
	<br />
	<br />
	<table class="table table-stripped">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Birth_day</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'conn.php';
		$data = mysqli_query($myconn, "select * from basic_crud");
		while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['name']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['birth_date']; ?></td>
				<td><?php echo $d['address']; ?></td>
				<td>
					<a class="btn btn-sm btn-info" href="update_form.php?id=<?php echo $d['id'] . '&&name=' . $d['name'] . '&&nim=' . $d['nim'] . '&&birth_date=' . $d['birth_date'] . '&&address=' . $d['address']; ?>">EDIT</a>
					<a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>
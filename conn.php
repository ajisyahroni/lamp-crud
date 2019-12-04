<?php
// silahkan ganti nama database sesuai db klean
$database = "dbku";
$myconn = mysqli_connect("localhost", "root", "", $database);

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

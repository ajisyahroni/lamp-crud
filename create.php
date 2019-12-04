<?php
// koneksi database
include 'conn.php';

// menangkap data yang di kirim dari form
$nama = $_POST['name'];
$nim = $_POST['nim'];
$bd = $_POST['birth_date'];
$alamat = $_POST['address'];
// pembuatan query insert 
$queryInsert = "INSERT INTO `basic_crud` (`id`, `name`, `nim`, `birth_date`, `address`)";
$queryInsert .= "VALUES (NULL, '$nama', '$nim', '$bd', '$alamat');";
// menginput data ke database
mysqli_query($myconn, $queryInsert);

// mengalihkan halaman kembali ke index.php
header("location:read.php");

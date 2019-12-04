<?php
// koneksi database
include 'conn.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['name'];
$nim = $_POST['nim'];
$bd = $_POST['birth_date'];
$alamat = $_POST['address'];

// membuat query database update
$queryUpdate = "UPDATE basic_crud SET ";
$queryUpdate .= "name='" . $nama . "', nim='" . $nim . "',birth_date='" . $bd . "',address='" . $alamat . "' ";
$queryUpdate .= "WHERE id = " . $id;

// mengupdate data ke database
mysqli_query($myconn, $queryUpdate);

// mengalihkan halaman kembali ke index.php
header("location:read.php");

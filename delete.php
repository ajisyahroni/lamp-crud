<?php
include "conn.php";
$id = $_GET['id'];
$queryDelete = "DELETE FROM basic_crud where id='$id' ";
mysqli_query($myconn, $queryDelete);

// mengalihkan halaman kembali ke index.php
header("location:read.php");
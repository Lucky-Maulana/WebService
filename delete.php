<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_mahasiswa   = $_GET['id_mahasiswa'];
// query SQL untuk insert data
$query="DELETE from mahasiswa where id_mahasiswa='$id_mahasiswa'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index1.php");
?>
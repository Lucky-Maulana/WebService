<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$penyakit           = $_POST['penyakit'];
$deskripsi           = $_POST['deskripsi'];
$tips       = $_POST['tips'];
// query SQL untuk insert data
$query="UPDATE mahasiswa SET penyakit='$penyakit',deskripsi='$deskripsi',tips='$tips'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>
<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];
$sql = mysqli_query($koneksi, "UPDATE `kategori` SET `nama_kategori`='$nama_kategori' WHERE id='$id'");
header("location:kategori.php"); 
?>
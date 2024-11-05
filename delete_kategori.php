<?php 
include 'koneksi.php';
$id = $_POST['id'];

$sql = mysqli_query($koneksi, "DELETE FROM kategori WHERE id='$id'");
header ("location:kategori.php");
?>
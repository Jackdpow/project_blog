<?php 
include 'koneksi.php';
$id = $_POST['id'];

$sql = mysqli_query($koneksi, "DELETE FROM artikel WHERE id='$id'");
header ("location:artikel.php");
?>
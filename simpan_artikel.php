<?php
include 'koneksi.php';
$id               =$_POST['id'];
$judul            =$_POST['judul'];
$tanggal_publish  =$_POST['tanggal_publish'];
$nama_kategori      =$_POST['id_kategori'];
$isi_artikel      =$_POST['isi_artikel'];
$user_id          =$_POST['user_id'];
$status_aktif     =$_POST['status_aktif'];

$target_dir = "cover/";
$namaFile = $_FILES["cover"]["name"];
$target_file = $target_dir . basename($namaFile);
$namaSementara = $_FILES['cover']['tmp_name'];
$terupload = move_uploaded_file($namaSementara, $target_file);

$sql = mysqli_query($koneksi, "insert into artikel(id, judul,tanggal_publish,kategori_id,isi_artikel,cover,user_id,status_aktif)
values ('$id','$judul','$tanggal_publish','$nama_kategori','$isi_artikel','$namaFile','$user_id','$status_aktif')");
header("location:artikel.php");

?>
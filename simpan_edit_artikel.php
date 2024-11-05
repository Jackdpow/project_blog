<?php
include 'koneksi.php';
$id               =$_POST['id'];
$judul            =$_POST['judul'];
$tanggal_publish  =$_POST['tanggal_publish'];
$nama_kategori    =$_POST['kategori_id'];
$isi_artikel      =$_POST['isi_artikel'];
$user_id          =$_POST['user_id'];
$status_aktif     =$_POST['status_aktif'];

$target_dir = "cover/";
$namaFile = $_FILES["cover"]["name"];
$target_file = $target_dir . basename($namaFile);
$namaSementara = $_FILES['cover']['tmp_name'];
$terupload = move_uploaded_file($namaSementara, $target_file);

$sql = mysqli_query($koneksi, "update artikel set id='$id', judul='$judul', tanggal_publish='$tanggal_publish', kategori_id='$nama_kategori', isi_artikel='$isi_artikel', cover='$namaFile', user_id='$user_id', status_aktif='$status_aktif' where id ='$id'");
header("location:artikel.php");

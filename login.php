<?php
include 'koneksi.php';
session_start();

$nama = $_POST['nama'];
$password = md5($_POST['password']);
$sql = "select * from user where (nama_user='$nama' OR email='$nama') and password='$password'";
$user = mysqli_fetch_array(mysqli_query($koneksi,$sql));




if($user){
    $_SESSION['nama'] = $user['nama_user'];

    header("location:Halaman_admin.php");
}else{

    header("location:index2.php");
}
exit;

?>
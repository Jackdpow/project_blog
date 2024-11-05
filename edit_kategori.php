<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penulis Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
include 'koneksi.php';
$id_kategori = $_GET['id'];
$sql = mysqli_query($koneksi, "select * from kategori where id='$id_kategori'");
$kategori = mysqli_fetch_array($sql);
?>
    <div class="container mt-5">
        <h2 class="text-center">Edit Kategori</h2>
        <div class="d-flex justify-content-between mb-3">
        
        </div>
   
<form action="simpan_edit_kategori.php" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Kategori</label>
   
    <input value="<?php echo $kategori['id']?>" name="id" type="text" class="form-control" id="exampleInputPassword1">

  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
    <input value="<?php echo $kategori['nama_kategori']?>"  name="nama_kategori" type="text" class="form-control" id="exampleInputPassword1">
    </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="tabel_kategori.php">
    <button type="button" class="btn btn-danger">Back</button>
  
</a>
 
</form>
    <link href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/navbar-fixed.css" rel="stylesheet">     
</body>
</html>
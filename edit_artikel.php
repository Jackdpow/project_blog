<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include 'koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "select * from artikel where id='$id'");
$artikel = mysqli_fetch_array($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Edit Artikel</h1>
    <form action="simpan_edit_artikel.php" enctype="multipart/form-data"  method="POST"> 

    <div class="mb-3">
        <label for="id" class="form-label">id</label>
        <input value="<?php echo $artikel['id']?>" name="id" type="text"  class="form-control" id="formGroupExampleInput" placeholder="tambahkan judul">
    </div>

    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input value="<?php echo $artikel['judul']?>" name="judul" type="text"  class="form-control" id="formGroupExampleInput" placeholder="tambahkan judul">
    </div>

    <div class="mb-3">
        <label for="tanggal_publish" class="form-label">Tanggal Publish</label>
        <input value="<?php echo $artikel['tanggal_publish']?>" name="tanggal_publish" type="date"  class="form-control" id="formGroupExampleInput" placeholder="tambahkan tanggal">
    </div>
   
    <div class="mb-3">
        <label for="kategori_id" class="form-label">Kategori Artikel</label>
        <select name="kategori_id" class="form-control">
            <?php
            $kategori = mysqli_query($koneksi, "select * from kategori");
            while($k=mysqli_fetch_array($kategori)){
                echo "<option value='".$k['id']."' ";
                echo $k['id']==$artikel['kategori_id']?'selected':'';
                echo ">".$k['nama_kategori']."</option>";
            }
            ?>
        </select>
    </div> 

    <div class="mb-3">
        <label for="isi_artikel" class="form-label">Isi Artikel</label>
        <textarea class="form-control" name="isi_artikel" id="exampleFormControlTextarea1" rows="20" placeholder="Isi Artikel"><?php echo $artikel['isi_artikel']?></textarea>
    </div>
      
    <div class="mb-3">
        <label for="cover" class="form-label">Cover</label>
        <input value="<?php echo $artikel['cover']?>" name="cover" type="file"  class="form-control" id="formGroupExampleInput" placeholder="tambahkan cover">
    </div>

    <div class="mb-3">
        <label for="user_id" class="form-label">user_id</label>
        <input value="<?php echo $artikel['user_id']?>" name="user_id" type="text"  class="form-control" id="formGroupExampleInput" placeholder="tambahkan user_id">
    </div>
    
    <div class="mb-3">
        <label for="status_aktif" class="form-label">status_aktif</label>
        <input value="<?php echo $artikel['status_aktif']?>" name="status_aktif" type="tinyint"  class="form-control" id="formGroupExampleInput" placeholder="tambahkan status_aktif">
    </div>
    
    <button type="submit" class="btn btn-warning btn-sm">Submit</button>
    <a href="artikel.php"><button class="btn btn-danger btn-sm">Batalkan</button></a>
    </form>
</body>
</html>
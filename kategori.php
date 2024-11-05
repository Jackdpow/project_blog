<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">HALAMAN ADMIN </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="halaman_admin.php">Back</a>
                </li>
             
            </ul>
        </div>
    </div>
</nav>

<?php include'koneksi.php'; ?>
    <div class="container mt-5">
        <h2 class="text-center">Daftar Kategori Buku</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="tambah_kategori.php"><button class="btn btn-primary">Tambah Kategori</button></a>
            
        </div>
        
        <table class="table table-bordered">
      
             
            <thead class="table-light">
                <tr>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $kategori = mysqli_query($koneksi,"select * from kategori");
                $nomor = 1;
                while($row=mysqli_fetch_array($kategori)){
                    ?>
                <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $row['nama_kategori']?></td>
                    <td>
                        <a href="edit_kategori.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm">Edit</a>
                        <form action="delete_kategori.php" method="POST">
              <input type="hidden" value="<?php echo $row['id']?>" name="id">            
              <button type="submit" class="btn btn-danger"  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
                        <!-- <button class="btn btn-danger btn-sm">Delete</button> -->
                    </td>
                </tr>
        
                <?php
            $nomor++;
         }
            ?>  
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
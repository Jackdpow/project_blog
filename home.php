<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Blog Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling header background */
        header {
            background: url('dan.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        /* Styling for category hover effect */
        .list-unstyled a:hover {
            color: #007bff;
            text-decoration: underline;
        }
        /* Back to Top button styling */
        #backToTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        #backToTop:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>
<?php include 'koneksi.php'; ?>

<header class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1>Selamat Datang di Halaman Home</h1>
        <p class="lead">Temukan artikel-artikel menarik seputar teknologi, kesehatan, gaya hidup, edukasi, traveling, dan lain-lain.</p>
    </div>
</header>

<div class="container mt-5">
    <h2 class="mb-4">Daftar Artikel</h2>

    <!-- Formulir Pencarian -->
    <form method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari artikel..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php
                        // Mengambil kata kunci pencarian dan kategori dari input form
                        $search = isset($_GET['search']) ? $_GET['search'] : '';
                        $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : '';

                        // Query SQL untuk mencari artikel berdasarkan judul atau isi artikel dan kategori
                        $query = "SELECT a.*, k.nama_kategori 
                                  FROM artikel AS a 
                                  JOIN kategori AS k ON a.kategori_id = k.id";
                        if (!empty($search)) {
                            $query .= " WHERE (a.judul LIKE '%$search%' OR a.isi_artikel LIKE '%$search%')";
                        }
                        if (!empty($kategori_id)) {
                            $query .= (strpos($query, 'WHERE') !== false ? ' AND' : ' WHERE') . " a.kategori_id = '$kategori_id'";
                        }

                        // Menjalankan query SQL
                        $artikel = mysqli_query($koneksi, $query);

                        // Menampilkan artikel jika ditemukan
                        if (mysqli_num_rows($artikel) > 0) {
                            while ($row = mysqli_fetch_array($artikel)) {
                    ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="cover/<?php echo $row['cover']; ?>" class="card-img-top" alt="Cover Artikel" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['judul']; ?></h5>
                                    <p class="card-text"><small class="text-muted">Tanggal Publish: <?php echo $row['tanggal_publish']; ?></small></p>
                                    <p class="card-text"><strong>Kategori:</strong> <?php echo $row['nama_kategori']; ?></p>
                                    <p class="card-text"><?php echo substr($row['isi_artikel'], 0, 120); ?>...</p>
                                    <a href="artikel_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php 
                            }
                        } else {
                            echo "<p class='text-center'>Artikel tidak ditemukan.</p>";
                        }
                    ?>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">Kategori</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    <?php
                                    // Fetch categories from the database
                                    $kategori_query = "SELECT * FROM kategori";
                                    $kategori_result = $koneksi->query($kategori_query);
                                    if ($kategori_result->num_rows > 0) {
                                        while ($kategori = $kategori_result->fetch_assoc()) {
                                    ?>
                                        <li>
                                            <a href="?kategori_id=<?php echo $kategori['id']; ?>">
                                                <?php echo htmlspecialchars($kategori['nama_kategori']); ?>
                                            </a>
                                        </li>
                                    <?php
                                        }
                                    } else {
                                        echo "<li>No categories found.</li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<p class="text-center mt-4">&copy; 2024 Blog Sederhana. Semua hak dilindungi.</p>

<!-- Back to Top Button -->
<button id="backToTop" class="btn">Back to Top</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Script for "Back to Top" button
    const backToTopButton = document.getElementById('backToTop');

    window.onscroll = function() {
        if (window.scrollY > 300) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    };

    backToTopButton.onclick = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>

</body>
</html>

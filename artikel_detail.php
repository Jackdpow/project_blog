<?php
include 'koneksi.php';

// Ambil ID artikel dari URL
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Query untuk mengambil detail artikel
$query = "SELECT a.*, k.nama_kategori 
          FROM artikel AS a 
          JOIN kategori AS k ON a.kategori_id = k.id 
          WHERE a.id = $id";
$artikel = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($artikel);

// Query untuk mengambil komentar
$comments_query = "SELECT * FROM comments WHERE artikel_id = $id ORDER BY tanggal DESC";
$comments = mysqli_query($koneksi, $comments_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['judul']; ?> - Blog Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h1><?php echo $row['judul']; ?></h1>
    <p><small class="text-muted">Tanggal Publish: <?php echo $row['tanggal_publish']; ?></small></p>
    <p><strong>Kategori:</strong> <?php echo $row['nama_kategori']; ?></p>
    <p><?php echo nl2br($row['isi_artikel']); ?></p>

    <h3>Komentar</h3>
    <div class="comments">
        <?php while ($comment = mysqli_fetch_array($comments)) { ?>
            <div class="border-bottom mb-3 pb-2">
                <strong><?php echo htmlspecialchars($comment['nama']); ?></strong> <small class="text-muted"><?php echo $comment['tanggal']; ?></small>
                <p><?php echo htmlspecialchars($comment['isi']); ?></p>
            </div>
        <?php } ?>
    </div>

    <!-- Formulir untuk menambahkan komentar -->
    <h4>Tambah Komentar</h4>
    <form method="POST" action="submit_comment.php">
        <input type="hidden" name="artikel_id" value="<?php echo $id; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Komentar</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Komentar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

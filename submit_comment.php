<?php
include 'koneksi.php'; // Pastikan file ini berisi logika koneksi database Anda

// Periksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $artikel_id = isset($_POST['artikel_id']) ? intval($_POST['artikel_id']) : 0;
    $nama = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';

    // Validasi input
    if (empty($nama) || empty($email) || empty($comment)) {
        // Redirect kembali dengan pesan error (Anda mungkin ingin mengimplementasikan pesan flash untuk umpan balik pengguna)
        header("Location: artikel_detail.php?id=$artikel_id&error=Semua field harus diisi!");
        exit();
    }

    // Siapkan pernyataan SQL untuk mencegah injeksi SQL
    $stmt = $koneksi->prepare("INSERT INTO comments (artikel_id, nama, email, isi) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $artikel_id, $nama, $email, $comment);

    // Jalankan pernyataan
    if ($stmt->execute()) {
        // Redirect kembali ke halaman detail artikel dengan pesan sukses
        header("Location: artikel_detail.php?id=$artikel_id&success=Komentar berhasil ditambahkan!");
    } else {
        // Redirect kembali dengan pesan error
        header("Location: artikel_detail.php?id=$artikel_id&error=Terjadi kesalahan saat menambahkan komentar!");
    }

    // Tutup pernyataan
    $stmt->close();
}

// Tutup koneksi database
$koneksi->close();
?>

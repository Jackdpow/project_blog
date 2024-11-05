<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blog Sederhana</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            min-width: 250px;
            background-color: #343a40;
            color: white;
        }
        .sidebar .nav-link {
            color: white;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>


    <div class="sidebar p-3">
        <h2>Admin Panel</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="artikel.php"><i class="fas fa-file-alt"></i> Manage Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kategori.php"><i class="fas fa-tags"></i> Manage Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home.php"><i class="fas fa-cog"></i> Back To Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Dashboard</h1>
        <p>Selamat datang di halaman admin. Anda dapat mengelola konten blog Anda di sini.</p>

  
                </div>
            </div>
        </div>

       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
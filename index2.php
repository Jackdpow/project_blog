<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <style>
        /* Atur gaya untuk body dan gambar latar */
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('n.jpg'); /* Ganti dengan nama gambar latar Anda */
            background-size: cover;
            background-position: center;
            filter: brightness(60%);
            z-index: -1;
        }

        .login-container {
            display: flex;
            justify-content: center;
            padding: 20px;
            min-height: 100vh;
            align-items: center;
        }

        /* Kartu login */
        .card {
            width: 400px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(1x);
            background-color: rgba(255, 255, 255, 0.85);
        }

        .brand {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #4CAF50;
        }
    </style>
</head>
<body>
    <!-- Gambar latar -->
    <div class="background"></div>

    <!-- Kontainer Login -->
    <div class="container login-container">
        <div class="card">
            <div class="text-center mb-4">
                <span class="brand">Login Sebagai Admin</span>
            </div>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Email/Username</label>
                    <input type="text" name="nama" class="form-control" id="username" placeholder="Masukkan username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
                <div class="text-center mt-3">
                    <small>Belum punya akun? <a href="#">Daftar disini</a></small>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

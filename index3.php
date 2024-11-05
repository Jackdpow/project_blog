<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Background Image Styling */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('dan.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(60%);
            z-index: -1;
        }
        /* Centered Login Card */
        .login-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }
        .card {
            width: 400px;
            padding: 30px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.85);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .brand {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
        }
        .btn-primary {
            background-color: #4CAF50;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #4CAF50;
        }
    </style>
</head>
<body>
    <!-- Background Image Container -->
    <div class="background"></div>

    <div class="container login-container">
        <!-- Login as User Card -->
        <div class="card">
            <div class="text-center mb-4">
                <span class="brand">Login Sebagai User</span>
            </div>
            <div class="text-center">
                <a href="home.php"><button type="submit" class="btn btn-primary w-100">Login</button></a>
            </div>
        </div>
        
        <!-- Login as Admin Card -->
        <div class="card">
            <div class="text-center mb-4">
                <span class="brand">Login Sebagai Admin</span>
            </div>
            <div class="text-center">
                <a href="index2.php"><button type="submit" class="btn btn-primary w-100">Login</button></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

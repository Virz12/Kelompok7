<?php 
    require 'functions.php';

    if (isset($_POST['register'])) {
        
        if (register($_POST) > 0) {
            echo "<script>
                    alert('Akun Berhasil Dibuat')
                  </script>";
                return false;
        } else {
            echo mysqli_error($conn);
        }
        
        header('location: login.html');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/a1fe272ba9.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="images/logo.png" alt="TOBAT">
            <span>TOBAT</span>
        </div>
        <div class="menu">
            <a href="index.html">Home</a>
            <a href="obat.html">Obat</a>
            <a href="tentang-kami.html">Tentang Kami</a>
            <a href="">Keranjang</a>
        </div>
        <div class="login">
            <a href="login.html">
                <i class="fa-solid fa-user"></i>
                <span>Login</span>
            </a>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Header -->
    <header class="login">
        <div class="container">
            <h1>REGISTER</h1>
            <div class="garis-hor regis"></div>
            <form action="" method="post">
                <!-- Username -->
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
                <div class="garis-hor input"></div>
                <!-- Password -->
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
                <div class="garis-hor input"></div>
                <!-- Konfirmasi Password -->
                <label for="password2">Konfirmasi Password</label>
                <input type="password" name="password2" id="password2" autocomplete="off" required>
                <div class="garis-hor input"></div>
                <!-- No Telepon -->
                <label for="telp">No. Telepon</label>
                <input type="tel" name="telepon" id="telp" autocomplete="off" required>
                <div class="garis-hor input"></div>
                <!-- Email -->
                <label for="email">Email (Optional)</label>
                <input type="email" name="email-register" id="email" autocomplete="off">
                <div class="garis-hor input"></div>
                <!-- Submit -->
                <button type="submit" name="register">REGISTER</button>
                <span>Sudah punya akun?<a href="login.html">Login</a></span>
            </form>
        </div>
    </header>
    <!-- Akhir Header -->
</body>
</html>
<?php 
    // Koneksi
    $conn = mysqli_connect("localhost", "root", "", "tobat");

    function register($data) {
        global $conn;

        $username = strtolower($data["username"]);
        $password = $data["password"];
        $password2 = $data["password2"];
        $telepon = $data["telepon"];
        $email = $data["email-register"];

        // pengecekan username
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Username sudah ada')
                  </script>";
            return false;
        }

        // pengecekan password
        if ($password !== $password2) {
            echo "<script>
                    alert('Password tidak sama')
                  </script>";
            return false;
        }

        // Pengacakan Password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Menambahkan user baru
        mysqli_query($conn, "INSERT INTO users VALUES('','$username', '$password', '$telepon', '$email')");

        return mysqli_affected_rows($conn);
    }
?>
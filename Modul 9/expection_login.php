<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Exception Login</title>
    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>

<h2>Login dengan Exception Handling</h2>

<form method="POST" action="">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" name="login" value="Login">
</form>

<?php
try {
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            throw new Exception("Username harus diisi.");
        }

        if (empty($password)) {
            throw new Exception("Password harus diisi.");
        }

        if ($username != "admin" || $password != "12345") {
            throw new Exception("Username atau password salah.");
        }

        echo "Login berhasil. Selamat datang, " . htmlspecialchars($username) . ".";
    }
} catch (Exception $e) {
    echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
}
?>

</body>
</html>

<p> Exception handling digunakan untuk menangani kesalahan pada program. Jika input kosong atau login salah, program akan menampilkan pesan error tanpa membuat halaman berhenti secara tiba-tiba.
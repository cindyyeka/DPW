<?php
setcookie("nama", "Cindy Eka Ramadani", time() + 3600);
setcookie("jurusan", "Teknologi Informasi", time() + 3600);
setcookie("kampus", "Politeknik Negeri Madiun", time() + 3600);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>

<h2>Data Cookies</h2>

<?php
if (isset($_COOKIE["nama"])) {
    echo "Nama: " . $_COOKIE["nama"] . "<br>";
    echo "Jurusan: " . $_COOKIE["jurusan"] . "<br>";
    echo "Kampus: " . $_COOKIE["kampus"] . "<br>";
} else {
    echo "Cookie sudah dibuat. Silakan refresh halaman untuk melihat data.";
}
?>

</body>
</html>

<p> Cookies digunakan untuk menyimpan data di browser pengguna. Data cookies masih bisa dibaca selama waktu cookies belum habis.
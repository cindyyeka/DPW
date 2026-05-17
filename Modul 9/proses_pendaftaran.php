<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <h2>Hasil Data Pendaftaran</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $tempat_lahir = $_POST["tempat_lahir"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $alamat = $_POST["alamat"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $jurusan = $_POST["jurusan"];

        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Tempat Lahir: " . $tempat_lahir . "<br>";
        echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
        echo "Alamat: " . $alamat . "<br>";
        echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
        echo "Jurusan: " . $jurusan . "<br>";
    } else {
        echo "Data belum dikirim.";
    }
    ?>

</body>
</html>

<p> Form digunakan untuk mengirim data ke file PHP. Jika menggunakan metode POST, data tidak terlihat di URL. Jika metode diubah menjadi GET, data akan terlihat di URL browser.
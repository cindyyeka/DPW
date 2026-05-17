<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Gambar</title>
</head>
<body>

<h2>Upload Gambar</h2>

<form action="" method="POST" enctype="multipart/form-data">
    Pilih gambar:
    <input type="file" name="gambar"><br><br>
    <input type="submit" name="submit" value="Upload">
</form>

<?php
if (isset($_POST["submit"])) {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $upload = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "File merupakan gambar - " . $check["mime"] . ".<br>";
        $upload = 1;
    } else {
        echo "File bukan gambar.<br>";
        $upload = 0;
    }

    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.<br>";
        $upload = 0;
    }

    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Maaf, file terlalu besar.<br>";
        $upload = 0;
    }

    if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg") {
        echo "Maaf, hanya file JPG, JPEG, dan PNG yang diperbolehkan.<br>";
        $upload = 0;
    }

    if ($upload == 0) {
        echo "Maaf, file tidak berhasil diupload.";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diupload.";
        } else {
            echo "Maaf, terjadi kesalahan saat upload.";
        }
    }
}
?>

</body>
</html>

<p> Upload gambar membutuhkan atribut enctype="multipart/form-data". Pemeriksaan file dilakukan agar hanya gambar yang bisa diupload, ukuran tidak terlalu besar, dan file tidak duplikat. Peringatan awal halaman dihilangkan dengan isset($_POST["submit"]).
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        .galeri {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .card {
            width: 180px;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
        }

        .card img {
            width: 150px;
            height: 120px;
            object-fit: cover;
            border-radius: 5px;
        }

        .nama-file {
            font-size: 12px;
            margin-top: 8px;
        }
    </style>
</head>
<body>

<h2>Galeri Gambar</h2>

<div class="galeri">
<?php
$fileList = glob("gambar/*");

foreach ($fileList as $filename) {
    if (is_file($filename)) {
        echo "<div class='card'>";
        echo "<img src='$filename' alt='gambar'>";
        echo "<div class='nama-file'>" . basename($filename) . "</div>";
        echo "</div>";
    }
}
?>
</div>

</body>
</html>

<p> Fungsi glob() digunakan untuk membaca file di dalam folder. File gambar dari folder gambar kemudian ditampilkan dalam bentuk galeri.
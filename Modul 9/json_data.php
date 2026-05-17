<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data JSON</title>
</head>
<body>

<h2>Konversi Array ke JSON</h2>

<?php
$dataSiswa = array(
    array("nama" => "Cindy", "umur" => 18),
    array("nama" => "Rina", "umur" => 17),
    array("nama" => "Dina", "umur" => 18),
    array("nama" => "Salsa", "umur" => 17),
    array("nama" => "Nanda", "umur" => 18),
    array("nama" => "Putri", "umur" => 17),
    array("nama" => "Ayu", "umur" => 18),
    array("nama" => "Lia", "umur" => 17),
    array("nama" => "Maya", "umur" => 18),
    array("nama" => "Siti", "umur" => 17),
    array("nama" => "Dewi", "umur" => 18),
    array("nama" => "Anisa", "umur" => 17),
    array("nama" => "Wulan", "umur" => 18),
    array("nama" => "Nia", "umur" => 17),
    array("nama" => "Tika", "umur" => 18)
);

$json = json_encode($dataSiswa, JSON_PRETTY_PRINT);

echo "<pre>";
echo $json;
echo "</pre>";
?>

</body>
</html>

<p> JSON digunakan untuk mengubah data array menjadi format data yang mudah dikirim atau digunakan oleh aplikasi lain. Fungsi json_encode() digunakan untuk mengubah array PHP menjadi JSON.
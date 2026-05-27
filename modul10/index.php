<?php

require_once "kelas/Manusia.php";

$cindy = new Manusia();
$cindy->setNama("Cindy Eka Ramadani");
$cindy->setUmur(18);

$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(20);

echo "<h2>Data Manusia</h2>";

echo "<h3>Data Saya</h3>";
echo "Nama : " . $cindy->getNama() . "<br>";
echo $cindy->getNIK() . "<br>";
echo "Umur : " . $cindy->getUmur() . " tahun<br>";

echo "<hr>";

echo "<h3>Data Budi</h3>";
echo "Nama : " . $budi->getNama() . "<br>";
echo $budi->getNIK() . "<br>";
echo "Umur : " . $budi->getUmur() . " tahun<br>";

echo "<hr>";

echo "<b>Kesimpulan:</b><br>";
echo "Program ini menggunakan konsep OOP pada PHP dengan membuat class Manusia. 
Class Manusia memiliki properti nama, NIK, dan umur. Data dapat diubah dan ditampilkan menggunakan method getter dan setter.";

?>
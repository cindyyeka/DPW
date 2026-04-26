<?php
// Deklarasi variabel
$jari_jari = 15;
$phi = 3.14; // nilai pendekatan pi

// Menghitung keliling (Rumus: 2 x phi x r)
$keliling = 2 * $phi * $jari_jari;

echo "<h3>Program Menghitung Keliling Lingkaran</h3>";
echo "Diketahui:<br>";
echo "Jari-jari (r) = " . $jari_jari . " cm<br>";
echo "Phi (&pi;) = " . $phi . "<br><br>";

echo "<b>Hasil:</b><br>";
echo "Keliling Lingkaran adalah <b>" . $keliling . " cm</b>";
?>
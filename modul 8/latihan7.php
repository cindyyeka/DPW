<?php
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

// Tampilkan Mangga (index 1)
echo "Saya suka " . $namaBuah[1] . "<br>";
// Tampilkan Jeruk (index 2)
echo "Saya suka " . $namaBuah[2] . "<br>";
// Tampilkan Apel (index 3)
echo "Saya suka " . $namaBuah[3] . "<br>";
// Tampilkan Melon (index 4)
echo "Saya suka " . $namaBuah[4] . "<br>";

// Array dengan spesifik Index (Associative Array)
$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "43 Tahun");
$umur['Ahmad'] = "50 Tahun";

echo "<br>Umur Andi adalah " . $umur['Andi'] . "<br><br>";

// Tampilkan semua umur
echo "<b>Daftar Semua Umur:</b><br>";
foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia <br>";
}
?>
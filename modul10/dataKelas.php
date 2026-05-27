<?php

require_once "kelas/Mahasiswa.php";

$mhs1 = new Mahasiswa("Cindy Eka Ramadani");
$mhs1->setNIM("253307032");
$mhs1->setJurusan("Teknologi Informasi");
$mhs1->setKelas("TI 2B");
$mhs1->setUmur(18);

echo "<h2>Data Mahasiswa</h2>";

echo "Nama : " . $mhs1->getNama() . "<br>";
echo "NIM : " . $mhs1->getNIM() . "<br>";
echo "Jurusan : " . $mhs1->getJurusan() . "<br>";
echo "Kelas : " . $mhs1->getKelas() . "<br>";
echo "Umur : " . $mhs1->getUmur() . " tahun<br>";
echo $mhs1->getNIK() . "<br>";

echo "<hr>";

echo "<b>Kesimpulan:</b><br>";
echo "Program ini menggunakan konsep inheritance atau pewarisan. 
Class Mahasiswa merupakan turunan dari class Manusia, sehingga dapat menggunakan method dari class Manusia seperti setNama, getNama, setUmur, getUmur, dan getNIK.";

?>
<?php

require_once "kelas/akunBank.php";

$data1 = new akunBank("001", 10000, "Cindy Eka Ramadani");
$data2 = new akunBank("002", 10000, "Budi Santoso");

$data1->tambahUang(5000);
$data1->kurangiUang(2000);

$data2->tambahUang(10000);
$data2->kurangiUang(3000);

echo "<h2>Data Akun Bank</h2>";

echo "<h3>Akun Pertama</h3>";
echo "Nama Pemilik : " . $data1->getNama() . "<br>";
echo "Nomor Akun : " . $data1->getNomorAkun() . "<br>";
echo "Jumlah Uang : Rp " . number_format($data1->tampilkanUang(), 0, ',', '.') . "<br>";
echo "Pajak 11% : Rp " . number_format($data1->hitungPajak(), 0, ',', '.') . "<br>";

echo "<hr>";

echo "<h3>Akun Kedua</h3>";
echo "Nama Pemilik : " . $data2->getNama() . "<br>";
echo "Nomor Akun : " . $data2->getNomorAkun() . "<br>";
echo "Jumlah Uang : Rp " . number_format($data2->tampilkanUang(), 0, ',', '.') . "<br>";
echo "Pajak 11% : Rp " . number_format($data2->hitungPajak(), 0, ',', '.') . "<br>";

echo "<hr>";

echo "<b>Kesimpulan:</b><br>";
echo "Program ini menggunakan class akunBank untuk menyimpan nomor akun, nama pemilik, dan jumlah uang. 
Program dapat menambahkan uang, mengurangi uang, menampilkan saldo, dan menghitung pajak sebesar 11%.";

?>
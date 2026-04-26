<?php
// Contoh fungsi void (tidak mengembalikan nilai)
function writeMsg($nama) {
    echo "Selamat datang " . $nama . " <br>";
}

writeMsg("Ahmad"); // Pemanggilan fungsi

// Fungsi dengan mengirim nilai balik (return)
function tambah(int $angka1, int $angka2) {
    $a = $angka1 + $angka2;
    return $a; // Mengirim nilai kembali ke pemanggil
}

$hasil = tambah(5, 5); // Memanggil fungsi tambah
echo "Hasil penjumlahan: " . $hasil;
?>
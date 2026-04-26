<?php
// Mendeklarasikan variabel array berisi nama-nama hari
$nama_hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

echo "<h3>Daftar 7 Nama Hari:</h3>";

// Menampilkan array menggunakan perulangan
foreach ($nama_hari as $hari) {
    echo "- " . $hari . "<br>";
}

/* Atau jika menggunakan variabel biasa satu per satu:
$hari1 = "Senin";
$hari2 = "Selasa";
// ... dan seterusnya
echo $hari1 . "<br>";
*/
?>
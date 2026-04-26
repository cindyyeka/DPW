<?php
// Membuat array berdasarkan tabel
$dataSiswa = array(
    1 => array("poin" => 75, "nama" => "Adi"),
    2 => array("poin" => 80, "nama" => "Joni"),
    3 => array("poin" => 65, "nama" => "Jihan"),
    4 => array("poin" => 70, "nama" => "Aya"),
    5 => array("poin" => 85, "nama" => "Ita"),
    6 => array("poin" => 90, "nama" => "Budi"),
    7 => array("poin" => 95, "nama" => "Tini"),
    8 => array("poin" => 65, "nama" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "<b>a) Poin siswa nomor urut 5:</b><br>";
echo "Nama: " . $dataSiswa[5]['nama'] . " | Poin: " . $dataSiswa[5]['poin'] . "<br><br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "<b>b) Siswa yang memiliki poin 90:</b><br>";
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 90) {
        echo "- " . $siswa['nama'] . "<br>";
    }
}
echo "<br>";

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "<b>c) Siswa yang memiliki poin 100:</b><br>";
$adaYang100 = false;
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 100) {
        echo "- " . $siswa['nama'] . "<br>";
        $adaYang100 = true;
    }
}

// Jika tidak ada siswa yang nilainya 100
if (!$adaYang100) {
    echo "Hasil: tidak ada<br>";
}
?>
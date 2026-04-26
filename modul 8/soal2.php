<?php
$jumlahUang = 1387500;
$sisaUang = $jumlahUang;

// Array pecahan uang
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

echo "Jumlah Uang yang ditarik Ani: Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br><br>";
echo "<b>Rincian pecahan yang diperoleh:</b><br>";

foreach ($pecahan as $nilai) {
    // Hitung berapa lembar/keping uang pecahan tersebut
    $jumlahLembar = floor($sisaUang / $nilai);
    
    // Tampilkan jika jumlahnya lebih dari 0
    if ($jumlahLembar > 0) {
        $jenis = ($nilai == 500) ? "keping" : "lembar";
        echo "- Rp. " . number_format($nilai, 0, ',', '.') . " : $jumlahLembar $jenis <br>";
        
        // Kurangi sisa uang menggunakan Modulus
        $sisaUang = $sisaUang % $nilai;
    }
}
?>
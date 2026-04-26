<?php
$gajiPokok = 3250000;
$tunjangan = 1200000;

// Gaji kotor = Gaji Pokok + Tunjangan
$gajiKotor = $gajiPokok + $tunjangan;

// Pajak penghasilan 10% dari gaji kotor
$pajak = 0.10 * $gajiKotor;

// Gaji bersih = Gaji kotor - Pajak
$gajiBersih = $gajiKotor - $pajak;

echo "<b>Perhitungan Gaji Obi:</b><br>";
echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjangan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
echo "Potongan Pajak (10%): Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
echo "<b>Gaji Bersih yang diterima Obi: Rp. " . number_format($gajiBersih, 0, ',', '.') . "</b>";
?>
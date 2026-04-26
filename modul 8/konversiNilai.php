<?php
$nilai = 85; // Ganti nilai ini untuk menguji
echo "Nilai Angka: $nilai <br>";

if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai Huruf: A";
} elseif ($nilai >= 80 && $nilai < 90) {
    echo "Nilai Huruf: AB";
} elseif ($nilai >= 70 && $nilai < 80) {
    echo "Nilai Huruf: B";
} elseif ($nilai >= 60 && $nilai < 70) {
    echo "Nilai Huruf: BC";
} elseif ($nilai >= 0 && $nilai < 60) {
    echo "Nilai Huruf: C";
} else {
    echo "Nilai tidak valid!";
}
?>
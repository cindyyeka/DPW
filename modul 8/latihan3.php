<?php
$x = 5;
$y = 10;

//Arithmetic operators
echo "Penambahan ".$x + $y."<br>";
echo "Pengurangan ".$x - $y."<br>";
echo "Perkalian ".$x * $y."<br>";
echo "Pembagian ".$x / $y."<br>";
echo "Modulus ".$x % $y."<br>";
echo "Eksponensial ".$x ** $y."<br>";
echo("<br>");

//Assignment operators
$x += 2; // $x = $x + 2
$y *= 2; // $y = $y * 2
echo "Penambahan x ".$x."<br>";
echo "Perkalian y ".$y."<br>";
echo("<br>");

//Increment/Decrement operators
echo "Isi ++x = ".++$x."<br>";
echo "Isi x++ = ".$x++."<br>";
echo "Isi x = ".$x."<br>";
echo("<br>");
echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y = ".$y."<br>";
echo("<br>");

//Conditional assignment operators
$user = "Cindy Eka Ramadani";
// <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status."<br>";
// variable $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";
echo "<br><br>";

echo "<b>Perbedaan \$x++ dan ++\$x</b><br>";
echo "<ul>";
echo "<li><b>\$x++ (Post-increment):</b> Nilai \$x akan diproses/ditampilkan terlebih dahulu pada baris tersebut, <b>baru setelah itu</b> nilainya ditambah 1 di memori.</li>";
echo "<li><b>++\$x (Pre-increment):</b> Nilai \$x akan <b>ditambah 1 terlebih dahulu</b>, setelah itu barulah nilai yang baru tersebut diproses/ditampilkan.</li>";
echo "</ul>";

?>
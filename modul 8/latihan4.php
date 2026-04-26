<?php
/* Operator logika yang bisa digunakan:
 * ==  (Sama Dengan) -> $x == $y
 * === (Identical) -> $x === $y
 * !=  (Tidak sama dengan) -> $x != $y
 * <>  (Tidak sama dengan) -> $x <> $y
 * !== (Not identical) -> $x !== $y
 * >   (Lebih Besar dari) -> $x > $y
 * <   (Kurang Dari) -> $x < $y
 * >=  (Lebih besar atau Sama dengan) -> $x >= $y
 * <=  (Kurang dari atau sama dengan) -> $x <= $y
 * <=> (Spaceship) -> $x <=> $y
*/

$t = date("H"); // mendapatkan jam dengan format 1-24

echo "<b>If</b><br>";
if ($t < 16) {
    echo "Selamat siang!<br>";
}

echo "<br><b>If dan Else</b><br>";
if ($t < 20) {
    echo "Selamat siang!<br>";
} else {
    echo "Selamat malam!<br>";
}

echo "<br><b>Nested If (If, Elseif, Else)</b><br>";
if ($t < 10) {
    echo "Selamat Pagi!<br>";
} elseif ($t < 16) {
    echo "Selamat sore!<br>";
} else {
    echo "Selamat Malam!<br>";
}
?>
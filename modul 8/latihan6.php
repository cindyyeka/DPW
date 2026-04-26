<?php
// While Loop
$x = 1;
echo "<b>While Loop</b><br>";
while ($x <= 5) {
    echo "Nomor: $x <br>";
    $x++;
}

// Do While
$x = 1;
echo "<br><b>Do While Loop</b><br>";
do {
    echo "Nomor: $x <br>";
    $x++;
} while ($x <= 5);

// Foreach
echo "<br><b>Foreach Loop</b><br>";
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

// For
echo "<br><b>For Loop</b><br>";
for ($x = 1; $x <= 10; $x++) {
    echo "Nomor: $x <br>";
}

// For dengan break
echo "<br><b>For dengan Break</b><br>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor: $x <br>";
}
?>
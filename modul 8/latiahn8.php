<?php
// Data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "1D" => array("lukman", "fajri", "mahmud")
);

// Menampilkan data array utuh
echo "<pre>";
print_r($array);
echo "</pre>";

// Menampilkan kelas 1C
echo "<b>Data Kelas 1C:</b><br>";
print_r($array['1C']);
echo "<br><br>";

// Menampilkan siswa kelas 1C dengan index 0 (udin)
echo "Siswa 1C index 0: " . $array['1C'][0] . "<br>";

// Tampilkan fajri (ada di kelas 1D, index 1)
echo "Tampilkan Fajri: " . $array['1D'][1] . "<br>";

// Tampilkan adi (ada di kelas 1C, index 2)
echo "Tampilkan Adi: " . $array['1C'][2] . "<br>";

// Data kelas bisa ditulis juga dengan sintaks pendek (short array syntax)
$array_simple = [
    "1C" => ["udin", "ismail", "adi"],
    "1D" => ["lukman", "fajri", "mahmud"]
];
?>
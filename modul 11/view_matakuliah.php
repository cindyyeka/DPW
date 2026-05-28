<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Matakuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Tabel Matakuliah</h1>

<div class="menu">
    <a href="index.php">Menu Utama</a>
    <a href="input_matakuliah.php">Input Data</a>
    <a href="viewdosen.php">Data Dosen</a>
    <a href="view_mahasiswa.php">Data Mahasiswa</a>
</div>

<div class="search">
    <form method="get" action="">
        <input type="text" name="cari" placeholder="Cari nama matakuliah">
        <input type="submit" value="Cari">
        <a href="view_matakuliah.php">Reset</a>
    </form>
</div>

<table border="1">
<tr>
    <th>Kode MK</th>
    <th>Nama MK</th>
    <th>SKS</th>
    <th>Jam</th>
    <th>Pilihan</th>
</tr>

<?php

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$cari%' ORDER BY kodeMK ASC";
} else {
    $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
}

$result = mysqli_query($link, $query);

if (!$result) {
    die("Query Error : " . mysqli_errno($link) . " - " . mysqli_error($link));
}

while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$data['kodeMK']."</td>";
    echo "<td>".$data['namaMK']."</td>";
    echo "<td>".$data['sks']."</td>";
    echo "<td>".$data['jam']."</td>";
    echo "<td>
            <a href='edit_matakuliah.php?kodeMK=".$data['kodeMK']."'>Edit</a> |
            <a href='hapus_matakuliah.php?kodeMK=".$data['kodeMK']."' onclick=\"return confirm('Yakin ingin menghapus data?')\">Hapus</a>
          </td>";
    echo "</tr>";
}

?>

</table>

</body>
</html>
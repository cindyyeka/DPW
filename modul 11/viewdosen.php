<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Tabel Dosen</h1>

<div class="menu">
    <a href="index.php">Menu Utama</a>
    <a href="input_dosen.php">Input Data</a>
    <a href="view_mahasiswa.php">Data Mahasiswa</a>
    <a href="view_matakuliah.php">Data Matakuliah</a>
</div>

<div class="search">
    <form method="get" action="">
        <input type="text" name="cari" placeholder="Cari nama dosen">
        <input type="submit" value="Cari">
        <a href="viewdosen.php">Reset</a>
    </form>
</div>

<br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nama Dosen</th>
    <th>No HP</th>
    <th>Pilihan</th>
</tr>

<?php

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$cari%' ORDER BY idDosen ASC";
} else {
    $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
}

$result = mysqli_query($link, $query);

if (!$result) {
    die("Query Error : " . mysqli_errno($link) . " - " . mysqli_error($link));
}

while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$data['idDosen']."</td>";
    echo "<td>".$data['namaDosen']."</td>";
    echo "<td>".$data['noHP']."</td>";
    echo "<td>
            <a href='editdosen.php?idDosen=".$data['idDosen']."'>Edit</a> |
            <a href='hapusdosen.php?idDosen=".$data['idDosen']."' onclick=\"return confirm('Yakin ingin menghapus data?')\">Hapus</a>
          </td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
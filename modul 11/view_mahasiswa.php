<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Tabel Mahasiswa</h1>

<div class="menu">
    <a href="index.php">Menu Utama</a>
    <a href="input_mahasiswa.php">Input Data</a>
    <a href="viewdosen.php">Data Dosen</a>
    <a href="view_matakuliah.php">Data Matakuliah</a>
</div>

<div class="search">
    <form method="get" action="">
        <input type="text" name="cari" placeholder="Cari nama mahasiswa">
        <input type="submit" value="Cari">
        <a href="view_mahasiswa.php">Reset</a>
    </form>
</div>

<table border="1">
<tr>
    <th>NPM</th>
    <th>Nama Mahasiswa</th>
    <th>Prodi</th>
    <th>Alamat</th>
    <th>No HP</th>
    <th>Pilihan</th>
</tr>

<?php

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$cari%' ORDER BY npm ASC";
} else {
    $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
}

$result = mysqli_query($link, $query);

if (!$result) {
    die("Query Error : " . mysqli_errno($link) . " - " . mysqli_error($link));
}

while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$data['npm']."</td>";
    echo "<td>".$data['namaMhs']."</td>";
    echo "<td>".$data['prodi']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['noHP']."</td>";
    echo "<td>
            <a href='edit_mahasiswa.php?npm=".$data['npm']."'>Edit</a> |
            <a href='hapus_mahasiswa.php?npm=".$data['npm']."' onclick=\"return confirm('Yakin ingin menghapus data?')\">Hapus</a>
          </td>";
    echo "</tr>";
}

?>

</table>

</body>
</html>
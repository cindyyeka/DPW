<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_GET['cari'])) {
    $cari = "%" . $_GET['cari'] . "%";
    $statement = $conn->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY npm ASC");
    $statement->bind_param("s", $cari);
} else {
    $statement = $conn->prepare("SELECT * FROM t_mahasiswa ORDER BY npm ASC");
}

$statement->execute();
$hasil = $statement->get_result();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Data Mahasiswa OOP</h1>

<div class="menu">
    <a href="index.php">Menu Utama</a>
    <a href="inputmahasiswa.php">Input Data</a>
    <a href="viewdosen.php">Data Dosen</a>
    <a href="viewmatakuliah.php">Data Matakuliah</a>
</div>

<div class="search">
    <form method="get" action="">
        <input type="text" name="cari" placeholder="Cari nama mahasiswa">
        <input type="submit" value="Cari">
        <a href="viewmahasiswa.php">Reset</a>
    </form>
</div>

<table>
<tr>
    <th>NPM</th>
    <th>Nama Mahasiswa</th>
    <th>Prodi</th>
    <th>Alamat</th>
    <th>No HP</th>
    <th>Pilihan</th>
</tr>

<?php
while ($data = $hasil->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($data['npm']) . "</td>";
    echo "<td>" . htmlspecialchars($data['namaMhs']) . "</td>";
    echo "<td>" . htmlspecialchars($data['prodi']) . "</td>";
    echo "<td>" . htmlspecialchars($data['alamat']) . "</td>";
    echo "<td>" . htmlspecialchars($data['noHP']) . "</td>";
    echo "<td>
            <a href='editmahasiswa.php?npm=" . $data['npm'] . "'>Edit</a> |
            <a href='hapusmahasiswa.php?npm=" . $data['npm'] . "' onclick=\"return confirm('Yakin ingin menghapus data?')\">Hapus</a>
          </td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>

<?php
$statement->close();
$conn->close();
?>
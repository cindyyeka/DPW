<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_GET['cari'])) {
    $cari = "%" . $_GET['cari'] . "%";
    $statement = $conn->prepare("SELECT * FROM t_dosen WHERE namaDosen LIKE ? ORDER BY idDosen ASC");
    $statement->bind_param("s", $cari);
} else {
    $statement = $conn->prepare("SELECT * FROM t_dosen ORDER BY idDosen ASC");
}

$statement->execute();
$hasil = $statement->get_result();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Data Dosen OOP</h1>

<div class="menu">
    <a href="index.php">Menu Utama</a>
    <a href="inputdosen.php">Input Data</a>
    <a href="viewmahasiswa.php">Data Mahasiswa</a>
    <a href="viewmatakuliah.php">Data Matakuliah</a>
</div>

<div class="search">
    <form method="get" action="">
        <input type="text" name="cari" placeholder="Cari nama dosen">
        <input type="submit" value="Cari">
        <a href="viewdosen.php">Reset</a>
    </form>
</div>

<table>
<tr>
    <th>ID</th>
    <th>Nama Dosen</th>
    <th>No HP</th>
    <th>Pilihan</th>
</tr>

<?php
while ($data = $hasil->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($data['idDosen']) . "</td>";
    echo "<td>" . htmlspecialchars($data['namaDosen']) . "</td>";
    echo "<td>" . htmlspecialchars($data['noHP']) . "</td>";
    echo "<td>
            <a href='editdosen.php?idDosen=" . $data['idDosen'] . "'>Edit</a> |
            <a href='hapusdosen.php?idDosen=" . $data['idDosen'] . "' onclick=\"return confirm('Yakin ingin menghapus data?')\">Hapus</a>
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
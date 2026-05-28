<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_GET['cari'])) {
    $cari = "%" . $_GET['cari'] . "%";
    $statement = $conn->prepare("SELECT * FROM t_matakuliah WHERE namaMK LIKE ? ORDER BY kodeMK ASC");
    $statement->bind_param("s", $cari);
} else {
    $statement = $conn->prepare("SELECT * FROM t_matakuliah ORDER BY kodeMK ASC");
}

$statement->execute();
$hasil = $statement->get_result();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Matakuliah OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Data Matakuliah OOP</h1>

<div class="menu">
    <a href="index.php">Menu Utama</a>
    <a href="inputmatakuliah.php">Input Data</a>
    <a href="viewdosen.php">Data Dosen</a>
    <a href="viewmahasiswa.php">Data Mahasiswa</a>
</div>

<div class="search">
    <form method="get" action="">
        <input type="text" name="cari" placeholder="Cari nama matakuliah">
        <input type="submit" value="Cari">
        <a href="viewmatakuliah.php">Reset</a>
    </form>
</div>

<table>
<tr>
    <th>Kode MK</th>
    <th>Nama MK</th>
    <th>SKS</th>
    <th>Jam</th>
    <th>Pilihan</th>
</tr>

<?php
while ($data = $hasil->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($data['kodeMK']) . "</td>";
    echo "<td>" . htmlspecialchars($data['namaMK']) . "</td>";
    echo "<td>" . htmlspecialchars($data['sks']) . "</td>";
    echo "<td>" . htmlspecialchars($data['jam']) . "</td>";
    echo "<td>
            <a href='editmatakuliah.php?kodeMK=" . $data['kodeMK'] . "'>Edit</a> |
            <a href='hapusmatakuliah.php?kodeMK=" . $data['kodeMK'] . "' onclick=\"return confirm('Yakin ingin menghapus data?')\">Hapus</a>
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
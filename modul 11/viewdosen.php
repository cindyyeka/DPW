<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Dosen</title>
    <style>
        h1 { text-align: center; }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Tabel Dosen</h1>

<center>
    <a href="input.php">Input Data</a>
</center>

<br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nama Dosen</th>
    <th>No HP</th>
    <th>Pilihan</th>
</tr>

<?php
$query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
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
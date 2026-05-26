<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

$input = $_GET['id'];

$statement = $conn->prepare("SELECT * FROM t_dosen WHERE idDosen=?");
$statement->bind_param("i", $input);
$statement->execute();

$hasil = $statement->get_result();

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Dosen OOP</title>
</head>
<body>

<h2>Data Dosen</h2>

<?php

while ($baris = $hasil->fetch_assoc()) {
    echo "ID Dosen : " . htmlspecialchars($baris['idDosen']) . "<br>";
    echo "Nama Dosen : " . htmlspecialchars($baris['namaDosen']) . "<br>";
    echo "No HP : " . htmlspecialchars($baris['noHP']) . "<br>";
}

$conn->close();

?>

</body>
</html>
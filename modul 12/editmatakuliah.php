<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];

    $statement = $conn->prepare("SELECT * FROM t_matakuliah WHERE kodeMK=?");
    $statement->bind_param("i", $kodeMK);
    $statement->execute();

    $hasil = $statement->get_result();
    $data = $hasil->fetch_assoc();

    $namaMK = $data['namaMK'];
    $sks = $data['sks'];
    $jam = $data['jam'];
} else {
    header("Location: viewmatakuliah.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Matakuliah OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Edit Data Matakuliah</h1>

<div class="container">
    <form action="proses_editmatakuliah.php" method="post">
        <fieldset>
            <legend>Edit Data Matakuliah</legend>

            <label>Kode MK :</label><br>
            <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>">
            <input type="text" value="<?php echo $kodeMK; ?>" disabled><br>

            <label>Nama MK :</label><br>
            <input type="text" name="namaMK" value="<?php echo $namaMK; ?>" required><br>

            <label>SKS :</label><br>
            <input type="number" name="sks" value="<?php echo $sks; ?>" required><br>

            <label>Jam :</label><br>
            <input type="number" name="jam" value="<?php echo $jam; ?>" required><br>

            <input type="submit" name="edit" value="Update Data">
            <br>
            <a href="viewmatakuliah.php">Kembali</a>
        </fieldset>
    </form>
</div>

</body>
</html>
<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_GET['idDosen'])) {
    $idDosen = $_GET['idDosen'];

    $statement = $conn->prepare("SELECT * FROM t_dosen WHERE idDosen=?");
    $statement->bind_param("i", $idDosen);
    $statement->execute();

    $hasil = $statement->get_result();
    $data = $hasil->fetch_assoc();

    $namaDosen = $data['namaDosen'];
    $noHP = $data['noHP'];
} else {
    header("Location: viewdosen.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Edit Data Dosen</h1>

<div class="container">
    <form action="proses_editdosen.php" method="post">
        <fieldset>
            <legend>Edit Data Dosen</legend>

            <label>ID Dosen :</label><br>
            <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>">
            <input type="text" value="<?php echo $idDosen; ?>" disabled><br>

            <label>Nama Dosen :</label><br>
            <input type="text" name="namaDosen" value="<?php echo $namaDosen; ?>" required><br>

            <label>No HP :</label><br>
            <input type="text" name="noHP" value="<?php echo $noHP; ?>" required><br>

            <input type="submit" name="edit" value="Update Data">
            <br>
            <a href="viewdosen.php">Kembali</a>
        </fieldset>
    </form>
</div>

</body>
</html>
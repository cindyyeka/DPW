<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_POST['input'])) {
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $statement = $conn->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
    $statement->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);

    if ($statement->execute()) {
        header("Location: viewmahasiswa.php");
    } else {
        echo "Gagal menambahkan data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
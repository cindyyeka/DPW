<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_POST['edit'])) {
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $statement = $conn->prepare("UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?");
    $statement->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);

    if ($statement->execute()) {
        header("Location: viewmahasiswa.php");
    } else {
        echo "Gagal mengubah data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
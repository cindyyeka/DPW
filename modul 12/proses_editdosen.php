<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_POST['edit'])) {
    $idDosen = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $statement = $conn->prepare("UPDATE t_dosen SET namaDosen=?, noHP=? WHERE idDosen=?");
    $statement->bind_param("ssi", $namaDosen, $noHP, $idDosen);

    if ($statement->execute()) {
        header("Location: viewdosen.php");
    } else {
        echo "Gagal mengubah data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
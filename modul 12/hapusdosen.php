<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_GET['idDosen'])) {
    $idDosen = $_GET['idDosen'];

    $statement = $conn->prepare("DELETE FROM t_dosen WHERE idDosen=?");
    $statement->bind_param("i", $idDosen);

    if ($statement->execute()) {
        header("Location: viewdosen.php");
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
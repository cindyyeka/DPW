<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];

    $statement = $conn->prepare("DELETE FROM t_matakuliah WHERE kodeMK=?");
    $statement->bind_param("i", $kodeMK);

    if ($statement->execute()) {
        header("Location: viewmatakuliah.php");
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
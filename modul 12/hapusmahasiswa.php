<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    $statement = $conn->prepare("DELETE FROM t_mahasiswa WHERE npm=?");
    $statement->bind_param("i", $npm);

    if ($statement->execute()) {
        header("Location: viewmahasiswa.php");
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
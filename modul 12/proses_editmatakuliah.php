<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_POST['edit'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $statement = $conn->prepare("UPDATE t_matakuliah SET namaMK=?, sks=?, jam=? WHERE kodeMK=?");
    $statement->bind_param("siii", $namaMK, $sks, $jam, $kodeMK);

    if ($statement->execute()) {
        header("Location: viewmatakuliah.php");
    } else {
        echo "Gagal mengubah data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
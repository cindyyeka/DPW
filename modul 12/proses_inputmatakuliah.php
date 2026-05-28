<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_POST['input'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $statement = $conn->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
    $statement->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);

    if ($statement->execute()) {
        header("Location: viewmatakuliah.php");
    } else {
        echo "Gagal menambahkan data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
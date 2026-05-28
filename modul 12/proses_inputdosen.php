<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $statement = $conn->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
    $statement->bind_param("ss", $namaDosen, $noHP);

    if ($statement->execute()) {
        header("Location: viewdosen.php");
    } else {
        echo "Gagal menambahkan data: " . $conn->error;
    }

    $statement->close();
}

$conn->close();

?>
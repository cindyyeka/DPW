<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

$sql = "INSERT IGNORE INTO t_dosen (idDosen, namaDosen, noHP)
        VALUES (10,'Rahmat Dwi Prasetyo', '08123456789')";

if ($conn->query($sql) === TRUE) {
    echo "Data dosen berhasil ditambahkan";
} else {
    echo "Gagal menambahkan data : " . $conn->error;
}

$conn->close();

?>
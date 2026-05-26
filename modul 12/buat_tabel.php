<?php

include "koneksi.php";

$db = new Database();
$conn = $db->conn;

$sql = "CREATE TABLE IF NOT EXISTS t_login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$hasil = $conn->query($sql);

if ($hasil === TRUE) {
    echo "Tabel t_login berhasil dibuat";
} else {
    echo "Tabel gagal dibuat : " . $conn->error;
}

$conn->close();

?>
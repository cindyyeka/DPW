<?php

include "koneksi.php";

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    $query = "DELETE FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Gagal menghapus data: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("Location: view_mahasiswa.php");

?>
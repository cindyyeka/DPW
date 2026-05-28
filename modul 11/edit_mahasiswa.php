<?php

include "koneksi.php";

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    $query = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error : " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);

    $namaMhs = $data['namaMhs'];
    $prodi = $data['prodi'];
    $alamat = $data['alamat'];
    $noHP = $data['noHP'];
} else {
    header("Location: view_mahasiswa.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Edit Data Mahasiswa</h1>

<div class="container">
    <form action="proses_editmahasiswa.php" method="post">
        <fieldset>
            <legend>Edit Data Mahasiswa</legend>

            <label>NPM :</label><br>
            <input type="hidden" name="npm" value="<?php echo $npm; ?>">
            <input type="text" value="<?php echo $npm; ?>" disabled><br>

            <label>Nama Mahasiswa :</label><br>
            <input type="text" name="namaMhs" value="<?php echo $namaMhs; ?>" required><br>

            <label>Prodi :</label><br>
            <input type="text" name="prodi" value="<?php echo $prodi; ?>" required><br>

            <label>Alamat :</label><br>
            <input type="text" name="alamat" value="<?php echo $alamat; ?>" required><br>

            <label>No HP :</label><br>
            <input type="text" name="noHP" value="<?php echo $noHP; ?>" required><br>

            <input type="submit" name="edit" value="Update Data">
        </fieldset>
    </form>
</div>

</body>
</html>
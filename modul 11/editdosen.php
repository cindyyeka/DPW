<?php
include "koneksi.php";

if (isset($_GET['idDosen'])) {
    $id = $_GET['idDosen'];

    $query = "SELECT * FROM t_dosen WHERE idDosen='$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error : " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);

    $namaDosen = $data['namaDosen'];
    $noHP = $data['noHP'];
} else {
    header("location:viewdosen.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Edit Data</h1>

<div class="container">
<form action="proses_editdosen.php" method="post">
    <fieldset>
        <legend>Edit Data Dosen</legend>

        <p>
            <label>ID :</label>
            <input type="hidden" name="idDosen" value="<?php echo $id; ?>">
            <input type="text" value="<?php echo $id; ?>" disabled>
        </p>

        <p>
            <label>Nama Dosen :</label>
            <input type="text" name="namaDosen" value="<?php echo $namaDosen; ?>">
        </p>

        <p>
            <label>No HP :</label>
            <input type="text" name="noHP" value="<?php echo $noHP; ?>">
        </p>

        <p>
            <input type="submit" name="edit" value="Update Data">
        </p>
    </fieldset>
</form>
</div>

</body>
</html>
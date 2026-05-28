<?php

include "koneksi.php";

if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];

    $query = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error : " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);

    $namaMK = $data['namaMK'];
    $sks = $data['sks'];
    $jam = $data['jam'];
} else {
    header("Location: view_matakuliah.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Matakuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Edit Data Matakuliah</h1>

<div class="container">
    <form action="proses_editmatakuliah.php" method="post">
        <fieldset>
            <legend>Edit Data Matakuliah</legend>

            <label>Kode MK :</label><br>
            <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>">
            <input type="text" value="<?php echo $kodeMK; ?>" disabled><br>

            <label>Nama MK :</label><br>
            <input type="text" name="namaMK" value="<?php echo $namaMK; ?>" required><br>

            <label>SKS :</label><br>
            <input type="number" name="sks" value="<?php echo $sks; ?>" required><br>

            <label>Jam :</label><br>
            <input type="number" name="jam" value="<?php echo $jam; ?>" required><br>

            <input type="submit" name="edit" value="Update Data">
        </fieldset>
    </form>
</div>

</body>
</html>
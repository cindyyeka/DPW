<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Input Data Mahasiswa</h1>

<div class="container">
    <form action="proses_inputmahasiswa.php" method="post">
        <fieldset>
            <legend>Input Data Mahasiswa</legend>

            <label>NPM :</label><br>
            <input type="text" name="npm" required><br>

            <label>Nama Mahasiswa :</label><br>
            <input type="text" name="namaMhs" required><br>

            <label>Prodi :</label><br>
            <input type="text" name="prodi" required><br>

            <label>Alamat :</label><br>
            <input type="text" name="alamat" required><br>

            <label>No HP :</label><br>
            <input type="text" name="noHP" required><br>

            <input type="submit" name="input" value="Simpan">
        </fieldset>
    </form>
</div>

</body>
</html>
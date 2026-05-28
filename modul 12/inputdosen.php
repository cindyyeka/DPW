<!DOCTYPE html>
<html>
<head>
    <title>Input Data Dosen OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Input Data Dosen</h1>

<div class="container">
    <form action="proses_inputdosen.php" method="post">
        <fieldset>
            <legend>Input Data Dosen</legend>

            <label>Nama Dosen :</label><br>
            <input type="text" name="namaDosen" required><br>

            <label>No HP :</label><br>
            <input type="text" name="noHP" required><br>

            <input type="submit" name="input" value="Simpan">
            <br>
            <a href="viewdosen.php">Kembali</a>
        </fieldset>
    </form>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Matakuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Input Data Matakuliah</h1>

<div class="container">
    <form action="proses_inputmatakuliah.php" method="post">
        <fieldset>
            <legend>Input Data Matakuliah</legend>

            <label>Kode MK :</label><br>
            <input type="text" name="kodeMK" required><br>

            <label>Nama MK :</label><br>
            <input type="text" name="namaMK" required><br>

            <label>SKS :</label><br>
            <input type="number" name="sks" required><br>

            <label>Jam :</label><br>
            <input type="number" name="jam" required><br>

            <input type="submit" name="input" value="Simpan">
        </fieldset>
    </form>
</div>

</body>
</html>
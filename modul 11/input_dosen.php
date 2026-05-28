<!DOCTYPE html>
<html>
<head>
    <title>Input Data Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Input Data</h1>

<div class="container">
<form action="proses_inputdosen.php" method="post">
    <fieldset>
        <legend>Input Data Dosen</legend>

        <p>
            <label>Nama Dosen :</label>
            <input type="text" name="namaDosen" required>
        </p>

        <p>
            <label>No HP :</label>
            <input type="text" name="noHP" placeholder="Contoh : 081222333444" required>
        </p>

        <p>
            <input type="submit" name="input" value="Simpan">
        </p>
    </fieldset>
</form>
</div>

</body>
</html>
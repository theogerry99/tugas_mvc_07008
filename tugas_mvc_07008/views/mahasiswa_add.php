<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Mahasiswa</h2>
    <form action="index.php?action=save" method="post">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="student_id" required><br><br>

        <button type="submit">Tambah</button>
    </form>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>

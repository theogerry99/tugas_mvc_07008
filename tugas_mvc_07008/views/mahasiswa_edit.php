<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Mahasiswa</title>
</head>
<body>
    <h2>Form Edit Mahasiswa</h2>
    <form action="index.php?action=update&id=<?= $record['id']; ?>" method="post">
        <label>Nama:</label><br>
        <input type="text" name="fullname" value="<?= $record['nama']; ?>" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="student_id" value="<?= $record['nim']; ?>" required><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>

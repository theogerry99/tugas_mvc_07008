<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="index.php?action=create">+ Tambah Data</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $item): ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['nim']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $item['id']; ?>">Edit</a> |
                    <a href="index.php?action=remove&id=<?= $item['id']; ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

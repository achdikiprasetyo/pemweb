<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan Buku</title>
    <style>
        form {
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h2>Tambah Buku Baru</h2>
    <a href="index.php">Kembali ke Daftar Buku</a>
    <br><br>

    <form method="post" action="aksi.php" enctype="multipart/form-data">
        <label>Kode Buku:</label>
        <input type="text" name="kode_buku" required>
        <br><br>
        <label>Judul:</label>
        <input type="text" name="judul" required>
        <br><br>
        <label>Pengarang:</label>
        <input type="text" name="pengarang" required>
        <br><br>
        <label>Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" required>
        <br><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" required>
        <br><br>
        <label>Jumlah Halaman:</label>
        <input type="number" name="jml_halaman" required>
        <br><br>
        <label>Kategori:</label>
        <input type="text" name="kategori" required>
        <br><br>
        <label>Cover:</label>
        <input type="file" name="cover" accept="image/*" required>
        <br><br>
        <input type="submit" name="submit" value="Tambah">
    </form>
</body>
</html>
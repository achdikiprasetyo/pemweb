<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
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
    <h2>Edit Buku Perpustakaan</h2>
    <a href="index.php">Kembali ke Daftar Buku</a>

    <?php
    if (isset($_GET["kode"])) {
        $kodeBuku = $_GET["kode"];

        $file = file("buku.txt", FILE_SKIP_EMPTY_LINES);
        $buku = null;

        foreach ($file as $line) {
            $data = explode("|", $line);
            if ($data[0] == $kodeBuku) {
                $buku = $data;
                break;
            }
        }

        if (!$buku) {
            echo "Buku tidak ditemukan.";
            exit;
        }

        $judul = $buku[1];
        $pengarang = $buku[2];
        $tahunTerbit = $buku[3];
        $penerbit = $buku[4];
        $jmlHalaman = $buku[5];
        $kategori = $buku[6];
        $coverPath = $buku[7];
    }
    ?>

    <form method="post" action="aksi_edit.php" enctype="multipart/form-data">
        <input type="hidden" name="kode_buku" value="<?php echo $kodeBuku; ?>">
        <label>Judul:</label>
        <input type="text" name="judul" value="<?php echo $judul; ?>" required>
        <br><br>
        <label>Pengarang:</label>
        <input type="text" name="pengarang" value="<?php echo $pengarang; ?>" required>
        <br><br>
        <label>Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" value="<?php echo $tahunTerbit; ?>" required>
        <br><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="<?php echo $penerbit; ?>" required>
        <br><br>
        <label>Jumlah Halaman:</label>
        <input type="number" name="jml_halaman" value="<?php echo $jmlHalaman; ?>" required>
        <br><br>
        <label>Kategori:</label>
        <input type="text" name="kategori" value="<?php echo $kategori; ?>" required>
        <br><br>
        <label>Cover:</label>
        <input type="file" name="cover" accept="image/*">
        <br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>    
</body>
</html>

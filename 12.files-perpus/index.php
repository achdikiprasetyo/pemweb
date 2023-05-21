<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ccc;
    }
    
    th {
        background-color: #f0f0f0;
        font-weight: bold;
    }
    
    a {
        text-decoration: none;
        color: #333;
    }
    
    a:hover {
        text-decoration: underline;
    }
    
</style>
<body>
    <h2>Daftar Buku Perpustakaan</h2>
    <a href="tambah_buku.php">Tambah Buku</a>
    <br><br>

    <table border="1">
        <tr>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Jumlah Halaman</th>
            <th>Kategori</th>
            <th>Cover</th>
            <th>Aksi</th>
        </tr>

        <?php
        
         // Membaca data buku dari file teks
        $file = file("buku.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
 
        foreach ($file as $line) {
            $data = explode("|", $line);
            $kodeBuku = $data[0];
            $judul = $data[1];
            $pengarang = $data[2];
            $tahunTerbit = $data[3];
            $penerbit = $data[4];
            $jmlHalaman = $data[5];
            $kategori = $data[6];
            $coverPath = $data[7];
 
            echo "<tr>";
            echo "<td>$kodeBuku</td>";
            echo "<td>$judul</td>";
            echo "<td>$pengarang</td>";
            echo "<td>$tahunTerbit</td>";
            echo "<td>$penerbit</td>";
            echo "<td>$jmlHalaman</td>";
            echo "<td>$kategori</td>";
            echo "<td><img src='$coverPath' alt='Cover' width='100'></td>";
            echo "<td><a href='edit.php?kode=$kodeBuku'>Edit</a> | <a href='aksi.php?kode=$kodeBuku&action=delete'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
     </table>
</body>
</html>

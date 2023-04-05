<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA KONDEKTUR</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
            max-width: 1000px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }


        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #0077be;
            color: #fff;
        }
        .add-data {
            display: block;
            margin: 20px auto;
            text-align: center;
            width: 200px;
            padding: 10px;
            border-radius: 20px;
            background-color: #0077be;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .add-data:hover {
            background-color: #005a8d;
        }
        
</style>


</head>
<body>
    <?php include 'header.php';?>
    <h1>Data Kondektur</h1>
    <?php
    include 'koneksi.php';
    

    $sql = "SELECT * FROM kondektur";
    $result = mysqli_query($koneksi, $sql);
    

    echo "<a href='kondektur_edit.php' class='add-data'>Tambah Data</a>";
    
    if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
    <tr>
        <th>ID Kondektur</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row['id_kondektur'] . "</td>
        <td>" . $row['nama'] . "</td>

        <td><a href='kondektur_edit.php?id_kondektur=" . $row['id_kondektur'] . "'>Edit</a> |
        <a href='kondektur_hapus.php?id_kondektur=" . $row['id_kondektur'] . "' onClick=\"return confirm(' Yakin ingin menghapus data ini?')\">Hapus</a></td>
    </tr>";
    }
    echo "</table>";
    } else {
    echo "Tidak ada data";
    }
    
    mysqli_close($koneksi);
    ?>

</body>
</html>

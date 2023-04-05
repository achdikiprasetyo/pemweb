<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Transupn</title>
</head>
<body>
    <?php include 'header.php';?>
    <?php
    include 'koneksi.php';

    if (isset($_POST['submit'])) {
        $id_trans_upn = $_POST['id_trans_upn'];
        $id_kondektur = $_POST['id_kondektur'];
        $id_bus = $_POST['id_bus'];
        $id_driver = $_POST['id_driver'];
        $jumlah_km = $_POST['jumlah_km'];
        $tanggal = $_POST['tanggal'];

        if (empty($id_trans_upn)) {
        $sql = "INSERT INTO trans_upn (id_trans_upn, id_kondektur, id_bus, id_driver, jumlah_km, tanggal)
        VALUES ('$id_trans_upn',
            (SELECT id_kondektur FROM kondektur WHERE id_kondektur = '$id_kondektur'),
            (SELECT id_bus FROM bus WHERE id_bus = '$id_bus'),
            (SELECT id_driver FROM driver where id_driver = '$id_driver'),'$jumlah_km','$tanggal')";
        
        } else {
        $sql = "UPDATE trans_upn SET
            id_kondektur = (SELECT id_kondektur FROM kondektur WHERE id_kondektur = '$id_kondektur'),
            id_bus = (SELECT id_bus FROM bus WHERE id_bus = '$id_bus'),
            id_driver = (SELECT id_driver FROM driver WHERE id_driver = '$id_driver'),
            jumlah_km = '$jumlah_km',
            tanggal = '$tanggal'
            WHERE id_trans_upn = '$id_trans_upn'";

        }
        
        if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    }

    if (isset($_GET['id_trans_upn'])) {
        $id_trans_upn = $_GET['id_trans_upn'];
        $sql = "SELECT * FROM trans_upn WHERE id_trans_upn='$id_trans_upn'";
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        $judul_form = "Edit Data Transaupn";
    } else {
        $row = array('id_trans_upn' => '', 'id_kondektur' => '', 'id_bus' => '', 'id_driver' =>'', 'jumlah_km' =>'', 'tanggal' => '');
        $judul_form = "Tambah Data Transupn";
    }

    echo "<h2>$judul_form</h2>";
    echo "<form method='post' action=''>";
    echo "<input type='hidden' name='id_trans_upn' value='" . $row['id_trans_upn'] . "'>";
    echo "<table>";
    echo "<tr><td>ID Kondektur</td><td><input type='number' name='id_kondektur' value='" . $row['id_kondektur'] . "'></td></tr>";
    echo "<tr><td>ID BUS</td><td><input type='number' name='id_bus' value='" . $row['id_bus'] . "'></td></tr>";
    echo "<tr><td>ID Driver</td><td><input type='number' name='id_driver' value='" . $row['id_driver'] . "'></td></tr>";
    echo "<tr><td>Jumlah KM</td><td><input type='number' name='jumlah_km' value='" . $row['jumlah_km'] . "'></td></tr>";
    echo "<tr><td>Tanggal</td><td><input type='date' name='tanggal' value='" . $row['tanggal'] . "'></td></tr>";
    echo "<tr><td></td><td><input type='submit' name='submit' value='Simpan'></td></tr>";
    echo "</table>";
    echo "</form>";

    mysqli_close($koneksi);
    ?>
</body>
</html>


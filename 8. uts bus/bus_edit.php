<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Bus</title>
</head>
<body>
  <?php include 'header.php';?>
  <?php
  include 'koneksi.php';

  if (isset($_POST['submit'])) {
    $id_bus = $_POST['id_bus'];
    $plat = $_POST['plat'];
    $status = $_POST['status'];

    
    if (empty($id_bus)) {
      $sql = "INSERT INTO bus (plat, status) VALUES ('$plat', '$status')";
    } else {
      $sql = "UPDATE bus SET plat='$plat', status='$status' WHERE id_bus='$id_bus'";
    }
    
    if (mysqli_query($koneksi, $sql)) {
      echo "Data berhasil disimpan";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
  }

  if (isset($_GET['id_bus'])) {
    $id_bus = $_GET['id_bus'];
    $sql = "SELECT * FROM bus WHERE id_bus='$id_bus'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $judul_form = "Edit Data bus";
  } else {
    $row = array('id_bus' => '', 'plat' => '', 'status' => '');
    $judul_form = "Tambah Data bus";
  }

  echo "<h2>$judul_form</h2>";
  echo "<form method='post' action=''>";
  echo "<input type='hidden' name='id_bus' value='" . $row['id_bus'] . "'>";
  echo "<table>";
  echo "<tr><td>Plat</td><td><input type='text' name='plat' value='" . $row['plat'] . "'></td></tr>";
  echo "<tr><td>Status</td><td><input type='number' name='status' value='" . $row['status'] . "'></td></tr>";

  echo "<tr><td></td><td><input type='submit' name='submit' value='Simpan'></td></tr>";
  echo "</table>";
  echo "</form>";

  mysqli_close($koneksi);
  ?>
</body>
</html>


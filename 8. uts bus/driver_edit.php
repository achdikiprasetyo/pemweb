<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Driver</title>
</head>
<body>
  <?php include 'header.php';?>
  <?php
  include 'koneksi.php';

  if (isset($_POST['submit'])) {
    $id_driver = $_POST['id_driver'];
    $nama = $_POST['nama'];
    $no_sim = $_POST['no_sim'];
    $alamat = $_POST['alamat'];
    
    if (empty($id_driver)) {
      $sql = "INSERT INTO driver (nama, no_sim, alamat) VALUES ('$nama', '$no_sim', '$alamat')";
    } else {
      $sql = "UPDATE driver SET nama='$nama', no_sim='$no_sim', alamat='$alamat' WHERE id_driver='$id_driver'";
    }
    
    if (mysqli_query($koneksi, $sql)) {
      echo "Data berhasil disimpan";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
  }

  if (isset($_GET['id_driver'])) {
    $id_driver = $_GET['id_driver'];
    $sql = "SELECT * FROM driver WHERE id_driver='$id_driver'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $judul_form = "Edit Data Driver";
  } else {
    $row = array('id_driver' => '', 'nama' => '', 'no_sim' => '', 'alamat' => '');
    $judul_form = "Tambah Data Driver";
  }

  echo "<h2>$judul_form</h2>";
  echo "<form method='post' action=''>";
  echo "<input type='hidden' name='id_driver' value='" . $row['id_driver'] . "'>";
  echo "<table>";
  echo "<tr><td>Nama</td><td><input type='text' name='nama' value='" . $row['nama'] . "'></td></tr>";
  echo "<tr><td>No SIM</td><td><input type='number' name='no_sim' value='" . $row['no_sim'] . "'></td></tr>";
  echo "<tr><td>Alamat</td><td><input type='text' name='alamat' value='" . $row['alamat'] . "'></td></tr>";
  echo "<tr><td></td><td><input type='submit' name='submit' value='Simpan'></td></tr>";
  echo "</table>";
  echo "</form>";

  mysqli_close($koneksi);
  ?>
</body>
</html>


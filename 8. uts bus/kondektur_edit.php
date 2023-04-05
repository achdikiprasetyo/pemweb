<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kondektur</title>
</head>
<body>
  <?php include 'header.php';?>
  <?php
  include 'koneksi.php';

  if (isset($_POST['submit'])) {
    $id_kondektur = $_POST['id_kondektur'];
    $nama = $_POST['nama'];

    if (empty($id_kondektur)) {
      $sql = "INSERT INTO kondektur (nama) VALUES ('$nama')";
    } else {
      $sql = "UPDATE kondektur SET nama='$nama' WHERE id_kondektur='$id_kondektur'";
    }
    
    if (mysqli_query($koneksi, $sql)) {
      echo "Data berhasil disimpan";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
  }

  if (isset($_GET['id_kondektur'])) {
    $id_kondektur = $_GET['id_kondektur'];
    $sql = "SELECT * FROM kondektur WHERE id_kondektur='$id_kondektur'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $judul_form = "Edit Data Kondektur";
  } else {
    $row = array('id_kondektur' => '', 'nama' => '', 'no_sim' => '', 'alamat' => '');
    $judul_form = "Tambah Data Kondektur";
  }

  echo "<h2>$judul_form</h2>";
  echo "<form method='post' action=''>";
  echo "<input type='hidden' name='id_kondektur' value='" . $row['id_kondektur'] . "'>";
  echo "<table>";
  echo "<tr><td>Nama Kondektur</td><td><input type='text' name='nama' value='" . $row['nama'] . "'></td></tr>";
  echo "<tr><td></td><td><input type='submit' name='submit' value='Simpan'></td></tr>";
  echo "</table>";
  echo "</form>";

  mysqli_close($koneksi);
  ?>
</body>
</html>


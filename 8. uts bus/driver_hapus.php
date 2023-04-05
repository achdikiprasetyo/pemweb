<?php
include 'koneksi.php';
include 'header.php';
if (isset($_GET['id_driver'])) {
    $id_driver = $_GET['id_driver'];
    

    $sql = "DELETE FROM driver WHERE id_driver = $id_driver";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Parameter id_driver tidak ditemukan";
}

mysqli_close($koneksi);
?>

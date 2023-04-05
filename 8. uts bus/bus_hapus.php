<?php
include 'koneksi.php';
include 'header.php';
if (isset($_GET['id_bus'])) {
    $id_bus = $_GET['id_bus'];
    

    $sql = "DELETE FROM bus WHERE id_bus = $id_bus";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Parameter id_bus tidak ditemukan";
}

mysqli_close($koneksi);
?>

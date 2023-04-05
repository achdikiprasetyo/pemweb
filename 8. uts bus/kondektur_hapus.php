<?php
include 'koneksi.php';
include 'header.php';
if (isset($_GET['id_kondektur'])) {
    $id_kondektur = $_GET['id_kondektur'];
    

    $sql = "DELETE FROM kondektur WHERE id_kondektur = $id_kondektur";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Parameter id_kondektur tidak ditemukan";
}

mysqli_close($koneksi);
?>

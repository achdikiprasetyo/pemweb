<?php
include 'koneksi.php';
include 'header.php';

if (isset($_GET['id_trans_upn'])) {
    $id_trans_upn = $_GET['id_trans_upn'];
    

    $sql = "DELETE FROM trans_upn WHERE id_trans_upn = $id_trans_upn";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Parameter id_trans_upn tidak ditemukan";
}

mysqli_close($koneksi);
?>

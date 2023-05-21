<?php
if (isset($_POST["submit"])) {
    $kodeBuku = $_POST["kode_buku"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $tahunTerbit = $_POST["tahun_terbit"];
    $penerbit = $_POST["penerbit"];
    $jmlHalaman = $_POST["jml_halaman"];
    $kategori = $_POST["kategori"];
    $coverPath = $_FILES["cover"]["name"]; 

    $file = file("buku.txt", FILE_SKIP_EMPTY_LINES);
    $perbaruiData = [];


    foreach ($file as $line) {
        $data = explode("|", $line);
        if ($data[0] == $kodeBuku) {
            $updateLine = $kodeBuku . "|" . $judul . "|" . $pengarang . "|" . $tahunTerbit . "|" . $penerbit . "|" . $jmlHalaman . "|" . $kategori . "|" . $coverPath;
            $perbaruiData[] = $updateLine;
        } else {
            $perbaruiData[] = $line;
        }
    }

    $file_perpus = fopen("buku.txt", "w");
    if ($file_perpus) {
        foreach ($perbaruiData as $line) {
            fwrite($file_perpus, $line . "\n");
        }
        fclose($file_perpus); 
        header("Location: index.php"); 
        exit; 
    } else {
        echo "Gagal membuka file buku.txt.";
        exit;
    }
}
?>

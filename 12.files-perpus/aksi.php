<?php
if (isset($_POST["submit"])) {
    $kodeBuku = $_POST["kode_buku"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $tahunTerbit = $_POST["tahun_terbit"];
    $penerbit = $_POST["penerbit"];
    $jmlHalaman = $_POST["jml_halaman"];
    $kategori = $_POST["kategori"];
    $coverPath = "covers/" . basename($_FILES["cover"]["name"]);

    move_uploaded_file($_FILES["cover"]["tmp_name"], $coverPath);

    $data = "$kodeBuku|$judul|$pengarang|$tahunTerbit|$penerbit|$jmlHalaman|$kategori|$coverPath";
    file_put_contents("buku.txt", $data . PHP_EOL, FILE_APPEND);

    header("Location: index.php");
    exit();
}

if (isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_GET["kode"])) {
    $kodeBuku = $_GET["kode"];

    $file = file("buku.txt", FILE_SKIP_EMPTY_LINES);
    $output = [];

    foreach ($file as $line) {
        $data = explode("|", $line);
        if ($data[0] != $kodeBuku) {
            $output[] = $line;
        }
    }
    file_put_contents("buku.txt", implode(PHP_EOL, $output));

    header("Location: index.php");
    exit();
}

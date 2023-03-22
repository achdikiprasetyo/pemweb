<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA DIRI</title>

    <link rel="stylesheet" href="cv.css">
</head>
<?php
$nama = 'ACH DIKI PRASETYO';
$kelebihan = array('Percaya diri','Time management yang baik','Bisa bekerja dengan Tim');
$Kemampuan = array('Berkomunikasi dengan baik','Paham jaringan internet','Bertanggung jawab','Menguasai beberapa bahasa pemerograman (C,C++)');
$pendidikan = array('SD Negeri Sepande','SMP Negeri 4 Sidoarjo','SMK Negeri 3 Buduran','UPN "Veteran" Jawa Timur');
$pelatihan = array('Enterpreneur (2020)','Seminar UMKM Go Digital','Webinar Fasilkom Talk (2021)');
$pengalaman = array('Magang di perusahaan penyedia internet “Latansa Teknologi”','Instalasi jaringan di “SMK Negeri 3 Buduran”','Mengikti Organisasi Pramuka'); 
$kontak = array('+(62)82247424826','dikiprasetyo1234@gmail.com');
 ?>
<body>
    <div class="container">
        <div class="kertas_satu">
            <div class="nama">
                <h3><?php echo "$nama"?></h3>
            </div>
            <div class="profile">
            </div>
            
            <h2>KELEBIHAN</h2>
            <div class="garis">
                
            </div>
            <div class="tabel-kanan">
                <?php foreach ($kelebihan as $isi) : ?>
                <ul>
                    <li><?php echo $isi ?></li>
                </ul>
                <?php endforeach;?>
            </div>
            <h2>KEMAMPUAN</h2>
            <div class="garis"></div>
            <div class="tabel-kanan">
                <?php foreach ($Kemampuan as $isi) : ?>
                <ul>
                    <li><?php echo $isi ?></li>
                </ul>
                <?php endforeach;?>
            </div>
            <h2>KONTAK</h2>
            <div class="garis"></div>
            <div class="tabel-kanan">
                <?php foreach ($kontak as $isi) : ?>
                <ul>
                    <li><?php echo $isi ?></li>
                </ul>
                <?php endforeach;?>
            </div>
        </div>
        <div class="kertas_dua">
            
            <div class="grup-1">
                <div class="box">
                    <div class="sub-isi">
                        <h2>TENTANG SAYA</h2>
                    </div>
                </div>
                <div class="isi">     Saya pernah dan berpengalaman dalam dunia jaringan komputer karena sebelumnya saya bersekolah di jurusan jaringan. Selain itu saya juga  pernah melakukan magang di sebuah perusahaan penyedia internet dan pernah mengerjakan project-project kecil. Saya juga bisa bekerja dengan kelompok atau tim.                </div>
                <div class="box">
                    <div class="sub-isi">
                        <h2>PENDIDIKAN</h2>
                    </div>
                </div>
                <div class="isi-tabel">
                    <?php foreach ($pendidikan as $isi) : ?>
                    <ul>
                        <li><?php echo $isi ?></li>
                    </ul>
                    <?php endforeach;?>
                </div>
                <div class="box">
                    <div class="sub-isi">
                        <h2>PENGALAMAN</h2>
                    </div>
                </div>
                <div class="isi-tabel">
                    <?php foreach ($pengalaman as $isi) : ?>
                    <ul>
                        <li><?php echo $isi ?></li>
                    </ul>
                    <?php endforeach;?>
                </div>
                <div class="box">
                    <div class="sub-isi">
                        <h2>PELATIHAN DAN SEMINAR</h2>
                    </div>
                </div>
                <div class="isi-tabel">
                    <?php foreach ($pelatihan as $isi) : ?>
                    <ul>
                        <li><?php echo $isi ?></li>
                    </ul>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
<footer>
    <h1>@Ach Diki Prasetyo</h1>
</footer>
</body>
</html>
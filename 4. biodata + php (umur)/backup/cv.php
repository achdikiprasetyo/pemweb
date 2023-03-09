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
                <ul>
                    <li><?php echo "$kelebihan[0]"?></li>
                    <li><?php echo "$kelebihan[1]"?></li>
                    <li><?php echo "$kelebihan[2]"?></li>
                </ul>
            </div>
            <h2>KEMAMPUAN</h2>
            <div class="garis"></div>
            <div class="tabel-kanan">
                <ul>
                    <li><?php echo "$Kemampuan[0]"?></li>
                    <li><?php echo "$Kemampuan[1]"?></li>
                    <li><?php echo "$Kemampuan[2]"?></li>
                    <li><?php echo "$Kemampuan[3]"?></li>
                </ul>
            </div>
            <h2>KONTAK</h2>
            <div class="garis"></div>
            <div class="tabel-kanan">
                <ul>
                    <li><?php echo "$kontak[0]"?></li>
                    <li><?php echo "$kontak[1]"?></li>
                </ul>
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
                    <ul>
                        <li><?php echo "$pendidikan[0]"?></li>
                        <li><?php echo "$pendidikan[1]"?></li>
                        <li><?php echo "$pendidikan[2]"?></li>
                        <li><?php echo "$pendidikan[3]"?></li>
                    </ul>
                </div>
                <div class="box">
                    <div class="sub-isi">
                        <h2>PENGALAMAN</h2>
                    </div>
                </div>
                <div class="isi-tabel">
                    <ul>
                        <li><?php echo "$pengalaman[0]"?></li>
                        <li><?php echo "$pengalaman[1]"?></li>
                        <li><?php echo "$pengalaman[2]"?></li>
                        
                    </ul>
                </div>
                <div class="box">
                    <div class="sub-isi">
                        <h2>PELATIHAN DAN SEMINAR</h2>
                    </div>
                </div>
                <div class="isi-tabel">
                    <ul>
                        <li><?php echo "$pelatihan[0]"?></li>
                        <li><?php echo "$pelatihan[1]"?></li>
                        <li><?php echo "$pelatihan[2]"?></li>
                        
                
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
<footer>
    <h1>@Ach Diki Prasetyo</h1>
</footer>
</body>
</html>
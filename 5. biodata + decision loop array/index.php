<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biodata</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/3edfd7e15c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="atas">
        <nav>
            <h2 class="core" id="home">My<span>Biodata</span></h2>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#bioku">Tentangku</a></li>
                <li><a href="#bioku">Kontak</a></li>
            </ul>
            <a href="cv.php" class="cv"><i class="fa-regular fa-user"></i> MY CV</a>
        </nav>
        <div class="isi-utama">
            <h4>Perkenalkan, Saya</h4>
            <h1>ACH. <span>DIKI</span> PRASETYO</h1>
            <h2>21081010055</h2>
        </div>
    </div>
    <!--datadiri-->
    <section class="bio"><
    <div class="main">
        <img src="foto_profile.png">
        <div class="isi-bio">
            <h2 id="bioku">TENTANGKU</h2>
            <h5>My Biodata :</h5>
            <?php
            $nama = 'ACH. DIKI PRASETYO';
            $npm = '21081010055';
            $tempat_lahir= 'Sidoarjo';
            $alamat = 'Dusun kauman sepande RT 01 / RW 01';
            $lahir='01-11-2002';
            ?>
            <td valign="top">
                
                <table border="0";>
                <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <?php echo "$nama" ?>
                    </td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td>:</td>
                    <td><?php echo "$npm" ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tangggal lahir</td>
                    <td>:</td>
                    <td>
                        <?php
                        echo "$tempat_lahir,$lahir";
                         
                        
                        ?>
                    </td>
        
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?php
                        echo "$alamat"
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td>
                    <?php
                      $tanggal_lahir = new DateTime('2002-11-01');
                      $hari_ini = new DateTime('today');
                      $umur = $hari_ini->diff($tanggal_lahir)->y;
                      echo "$umur tahun";
                    ?>
                    </td>
                </tr>
            </td>
            </table>
            <a href="http://wa.me/6282247424826" class="whatsapp">Hubungi Whatsapp <i class="fa-sharp fa-solid fa-comment"></i></a>
        </div>
    </div>
    </body>
    
</body>
</html>
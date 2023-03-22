<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menampilkan Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">Menampilkan Data dari Database</div>
    <div class="kertas-tabel">
    <?php
    require 'koneksi.php';
    require 'query.php';
    if(mysqli_num_rows($data_tabel) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>Nama Customer</th>";
        echo "<th>Nama Product</th>";
        echo "<th>Harga satuan</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($data_tabel)){
            echo "<tr>";
            echo "<td>".$row['customerName']."</td>";
            echo "<td>".$row['productName']."</td>";
            echo "<td>".$row['priceEach']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    mysqli_close($conn);
    ?>
     </div>
    </div>
    
	
</body>
</html>

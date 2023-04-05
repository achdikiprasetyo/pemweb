<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA BUS</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
            max-width: 1000px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }


        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #0077be;
            color: #fff;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            width: 80%;
            max-width: 1000px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        label {
            padding: 10px;
            font-weight: bold;
            flex-basis: 25%;
        }

        select {
            padding: 10px;
            flex-basis: 50%;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: #f2f2f2;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #0077be;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        button[type="submit"]:hover {
            background-color: #0051a8;
        }
        
</style>


</head>
<body>
    <?php include 'header.php';?>
    <h1>Data Bus</h1>
    <form method="GET">
        <label for="pilih_status">Pilih Status Bus :</label>
        <select id="pilih_status" name="pilih_status">
            <option value="0">Perbaikan/Rusak (Status : 0 )</option>
            <option value="1">Beroprasi/Aktif (Status : 1)</option>
            <option value="2">Bus Cadangan (Status : 2 )</option>

        </select>
        <button type="submit">Tampilkan</button>
    </form>
    <?php
    include 'koneksi.php';

    if(isset($_GET['pilih_status'])){
        $pilih_status = $_GET['pilih_status'];
        $sql = "SELECT bus.id_bus, bus.plat, COALESCE(SUM(trans_upn.jumlah_km), 0) AS total_km, bus.status 
                FROM bus LEFT JOIN trans_upn ON bus.id_bus = trans_upn.id_bus 
                WHERE bus.status = $pilih_status 
                GROUP BY bus.id_bus";
    } else {
        $sql = "SELECT bus.id_bus, bus.plat, COALESCE(SUM(trans_upn.jumlah_km), 0) AS total_km, bus.status FROM 
                bus LEFT JOIN trans_upn ON 
                bus.id_bus = trans_upn.id_bus GROUP BY bus.id_bus;";
    }

    
    
    
    $result = mysqli_query($koneksi, $sql);
    
    if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
    <tr>
        <th>ID Bus</th>
        <th>Plat</th>
        <th>Total KM</th>
        <th>Status</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row['id_bus'] . "</td>
        <td>" . $row['plat'] . "</td>
        <td>" . $row['total_km'] . " KM</td>
        <td style=\"background-color: " . ($row['status'] == 0 ? 'red' : ($row['status'] == 1 ? 'green' : 'yellow')) . ";\">" . $row['status'] . "</td>
    </tr>";
    }
    echo "</table>";
    } else {
    echo "Tidak ada data";
    }
    
    mysqli_close($koneksi);
    ?>

</body>
</html>

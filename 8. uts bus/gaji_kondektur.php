<!DOCTYPE html>
<html>
<head>
	<title>Data Gaji Kondektur</title>
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
            background-color:#0077be;
            color: #fff;
        }

        /* Style untuk form */
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
	<h1>Data Gaji Kondektur</h1>
    <form method="GET">
        <label for="bulan">Pilih Bulan:</label>
        <select id="bulan" name="bulan">
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select>
        <button type="submit">Tampilkan</button>
    </form>
	<table>
		<tr>
			<th>Nama Kondektur</th>
			<th>Bulan</th>
            <th>Jumlah km</th>
			<th>Total Gaji</th>
		</tr>

		<?php
			include "koneksi.php";

            if(isset($_GET['bulan'])){
                $bulan = $_GET['bulan'];
                $query = "SELECT kondektur.nama,  MONTHNAME(trans_upn.tanggal) as bulan, trans_upn.jumlah_km, SUM(trans_upn.jumlah_km * 1500) as total_gaji_bulanan 
                            FROM trans_upn 
                            INNER JOIN kondektur ON trans_upn.id_kondektur = kondektur.id_kondektur 
                            WHERE MONTH(trans_upn.tanggal) = $bulan
                            GROUP BY kondektur.nama,MONTH(trans_upn.tanggal)";
            } else {
                $query = "SELECT kondektur.nama,  MONTHNAME(trans_upn.tanggal) as bulan, trans_upn.jumlah_km, SUM(trans_upn.jumlah_km * 1500) as total_gaji_bulanan 
                            FROM trans_upn 
                            INNER JOIN kondektur ON trans_upn.id_kondektur = kondektur.id_kondektur 
                            GROUP BY kondektur.nama,MONTH(trans_upn.tanggal)";
            }
            $result = mysqli_query($koneksi, $query);
			while ($data = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $data['nama'] . "</td>";
				echo "<td>" . $data['bulan']  . "</td>";
                echo "<td>" . $data['jumlah_km']  . "</td>";
				echo "<td>Rp. " . $data['total_gaji_bulanan'] . "</td>";
				echo "</tr>";
			}

			mysqli_close($koneksi);
		?>
	</table>
</body>
</html>

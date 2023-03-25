<?php
include "koneksi.php";

// mengambil data dari database
$sql = "SELECT * FROM customers";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Customers</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
		a {
			display: inline-block;
			padding: 10px;
			background-color: #558B2F;
			color: #fff;
			font-size: 18px;
			text-decoration: none;
			border-radius: 5px;
			transition: background-color 0.2s ease;
		}
	</style>
</head>
<body>

	<h2>Data Customers</h2>
	<a href="index.php">Kembali</a>
	<table>
		<tr>
			<th>Customer Number</th>
			<th>Customer Name</th>
			<th>Contact Last Name</th>
			<th>Contact First Name</th>
			<th>Phone</th>
			<th>Address Line 1</th>
			<th>Address Line 2</th>
			<th>City</th>
			<th>State</th>
			<th>Postal Code</th>
			<th>Country</th>
			<th>Sales Rep Employee Number</th>
			<th>Credit Limit</th>
		</tr>

		<?php
		// menampilkan data dari database ke dalam tabel
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["customerNumber"] . "</td>";
				echo "<td>" . $row["customerName"] . "</td>";
				echo "<td>" . $row["contactLastName"] . "</td>";
				echo "<td>" . $row["contactFirstName"] . "</td>";
				echo "<td>" . $row["phone"] . "</td>";
				echo "<td>" . $row["addressLine1"] . "</td>";
				echo "<td>" . $row["addressLine2"] . "</td>";
				echo "<td>" . $row["city"] . "</td>";
				echo "<td>" . $row["state"] . "</td>";
				echo "<td>" . $row["postalCode"] . "</td>";
				echo "<td>" . $row["country"] . "</td>";
				echo "<td>" . $row["salesRepEmployeeNumber"] . "</td>";
				echo "<td>" . $row["creditLimit"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='13'>Tidak ada data</td></tr>";
		}
		mysqli_close($conn);
		?>

	</table>

</body>
</html>

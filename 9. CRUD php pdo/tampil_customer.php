<?php
include ('koneksi.php');

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		.edit {
			background-color: #FFEB3B;
			margin-right: 5px;
		}
		.delete {
			background-color: #F44336;
		}
	</style>
</head>
<body>
	<?php
		if (isset($_GET["message"])) {
		if ($_GET["message"] == "success-delete") {
			echo "<p>Data Customer telah berhasil dihapus</p>";
		}
		}
	?>
	<?php
		if (isset($_GET["message"])) {
		if ($_GET["message"] == "success-update") {
			echo "<p>Data Customer telah berhasil diupdate</p>";
		}
		}
	?>

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
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<?php

		if ($result->rowCount() > 0) {
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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
			echo "<td><a class='delete' href='delete_customer.php?customerNumber=" . $row["customerNumber"] . "'>Hapus</a></td>";
			echo "<td><a class='edit' href='edit_customer.php?customerNumber=" . $row["customerNumber"] . "'>Edit</a></td>";
			echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='13'>Tidak ada data</td></tr>";
		}
		$conn = null;
		?>
		</table>
</body>
</html>
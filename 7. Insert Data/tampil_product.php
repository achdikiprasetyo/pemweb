<?php
include "koneksi.php";


$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Product</title>
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

	<h2>Data Product</h2>
	<a href="index.php">Kembali</a>
	<table>
		<tr>
			<th>Product Code</th>
			<th>Product Name</th>
			<th>Product Line</th>
			<th>Product Scale</th>
			<th>Product Vendor</th>
			<th>Product Description</th>
			<th>Quantity In Stock</th>
			<th>Buy Price</th>
			<th>MSRP</th>
			
		</tr>

		<?php

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["productCode"] . "</td>";
				echo "<td>" . $row["productName"] . "</td>";
				echo "<td>" . $row["productLine"] . "</td>";
				echo "<td>" . $row["productScale"] . "</td>";
				echo "<td>" . $row["productVendor"] . "</td>";
				echo "<td>" . $row["productDescription"] . "</td>";
				echo "<td>" . $row["quantityInStock"] . "</td>";
				echo "<td>" . $row["buyPrice"] . "</td>";
				echo "<td>" . $row["MSRP"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan ='13'>Tidak ada data</td></tr>";
		}
		mysqli_close($conn);
		?>

	</table>

</body>
</html>

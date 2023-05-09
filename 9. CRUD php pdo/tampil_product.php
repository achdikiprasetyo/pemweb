<?php
include ('koneksi.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			echo "<p>Data Product telah berhasil dihapus</p>";
		}
		}
	?>
	<?php
	if (isset($_GET["message"])) {
		if ($_GET["message"] == "success-update") {
			echo "<p>Data Product telah berhasil diupdate</p>";
		}
		}
	?>
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
		if ($result->rowCount() > 0) {
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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
				echo "<td><a class='delete' href='delete_product.php?productCode=" . $row["productCode"] . "'>Hapus</a></td>";
				echo "<td><a class='edit' href='edit_product.php?productCode=" . $row["productCode"] . "'>Edit</a></td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan ='13'>Tidak ada data</td></tr>";
		}
		$conn=null;
		?>
	</table>
</body>
</html>

	
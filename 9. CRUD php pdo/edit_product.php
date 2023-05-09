<?php
include ('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$productCode = $_POST["productCode"];
	$productName = $_POST["productName"];
	$productLine = $_POST["productLine"];
	$productScale = $_POST["productScale"];
	$productVendor = $_POST["productVendor"];
	$productDescription = $_POST["productDescription"];
	$quantityInStock = $_POST["quantityInStock"];
	$buyPrice = $_POST["buyPrice"];
	$MSRP = $_POST["MSRP"];

	$sql = "UPDATE products SET productName=?, productLine=?, productScale=?, productVendor=?, productDescription=?, quantityInStock=?, buyPrice=?, MSRP=? WHERE productCode=?";
	$query = $conn->prepare($sql);
	$query->bindParam(1, $productName);
	$query->bindParam(2, $productLine);
	$query->bindParam(3, $productScale);
	$query->bindParam(4, $productVendor);
	$query->bindParam(5, $productDescription);
	$query->bindParam(6, $quantityInStock);
	$query->bindParam(7, $buyPrice);
	$query->bindParam(8, $MSRP);
	$query->bindParam(9, $productCode);

	if ($query->execute()) {
		header("Location: tampil_product.php?message=success-update");
		exit;
	} else {
		echo "Terjadi kesalahan: " . $query->errorInfo()[2];
	}

}

$productCode = $_GET["productCode"];

$query = $conn->prepare("SELECT * FROM products WHERE productCode=?");
$query->bindParam(1, $productCode);
$query->execute();

if ($query->rowCount() > 0) {
	$row = $query->fetch(PDO::FETCH_ASSOC);
} else {
	echo "Tidak dapat menemukan data product";
	exit;
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Product</title>
    <style>
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
        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type=text] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type=submit] {
            background-color: #558B2F;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
	<h2>Edit Data Product</h2>
	<a href="index.php">Kembali</a>
	<form method="POST">
		<input type="hidden" name="productCode" value="<?php echo $row["productCode"]; ?>">
		<label>Product Name:</label><br>
		<input type="text" name="productName" value="<?php echo $row["productName"]; ?>"><br>
		<label>Product Line:</label><br>
		<input type="text" name="productLine" value="<?php echo $row["productLine"]; ?>"><br>
		<label>Product Scale:</label><br>
		<input type="text" name="productScale" value="<?php echo $row["productScale"]; ?>"><br>
		<label>Product Vendor:</label><br>
		<input type="text" name="productVendor" value="<?php echo $row["productVendor"]; ?>"><br>
		<label>Product Description:</label><br>
		<input type="text" name="productDescription" value="<?php echo $row["productDescription"]; ?>"><br>
		<label>Quantity In Stock:</label><br>
		<input type="text" name="quantityInStock" value="<?php echo $row["quantityInStock"]; ?>"><br>
		<label>Buy Price:</label><br>
		<input type="text" name="buyPrice" value="<?php echo $row["buyPrice"]; ?>"><br>
		<label>MSRP:</label><br>
		<input type="text" name="MSRP" value="<?php echo $row["MSRP"]; ?>"><br><br>
		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>

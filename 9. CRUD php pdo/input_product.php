<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Data Product</title>
</head>
<body>
	<style>
		* {
			box-sizing: border-box;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			margin-top: 20px;
		}
		form {
			width: 100%;
			max-width: 800px;
			margin: 20px auto;
			border: 1px solid #ddd;
			padding: 20px;
		}
		form label {
			display: block;
			margin-bottom: 5px;
		}
		form input[type="text"],
		form input[type="number"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		form input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			margin-top: 10px;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }



	</style>
</head>
<body>

	<h1>Input Data Product</h1>

	<form action="simpan_product.php" method="post">
		<label for="productCode">Product Code:</label>
		<input type="text" name="productCode" required>

		<label for="productName">Product Name:</label>
		<input type="text" name="productName" required>

		<label for="productLine">Product Line:</label>
            <select name="productLine" id="productLine">
            <option value="">-- Pilih Product Line --</option>
            <option value="Classic Cars">Classic Cars</option>
            <option value="Motorcycles">Motorcycles</option>
            <option value="Planes">Planes</option>
            <option value="Ships">Ships</option>
            <option value="Trains">Trains</option>
            <option value="Trucks and Buses">Trucks and Buses</option>
            <option value="Vintage Cars">Vintage Cars</option>
            </select>

		<label for="productScale">Product Scale:</label>
		<input type="text" name="productScale" required>

		<label for="productVendor">Product Vendor:</label>
		<input type="text" name="productVendor" required>

		<label for="productDescription">Product Description:</label>
		<input type="text" name="productDescription" required>

		<label for="quantityInStock">Quantity In Stock:</label>
		<input type="number" name="quantityInStock">

		<label for="buyPrice">Buy Price:</label>
		<input type="number" name="buyPrice" required>

		<label for="MSRP">MSRP:</label>
		<input type="number" name="MSRP">

		<input type="submit" value="Tambahkan Data">
	</form>


</body>
</html>
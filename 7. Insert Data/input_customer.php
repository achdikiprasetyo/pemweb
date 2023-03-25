<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Data Customer</title>
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

	<h1>Input Data Customers</h1>

	<form action="simpan.php" method="post">
		<label for="customerNumber">Customer Number:</label>
		<input type="number" name="customerNumber" required>

		<label for="customerName">Customer Name:</label>
		<input type="text" name="customerName" required>

		<label for="contactLastName">Contact Last Name:</label>
		<input type="text" name="contactLastName" required>

		<label for="contactFirstName">Contact First Name:</label>
		<input type="text" name="contactFirstName" required>

		<label for="phone">Phone:</label>
		<input type="text" name="phone" required>

		<label for="addressLine1">Address Line 1:</label>
		<input type="text" name="addressLine1" required>

		<label for="addressLine2">Address Line 2:</label>
		<input type="text" name="addressLine2">

		<label for="city">City:</label>
		<input type="text" name="city" required>

		<label for="state">State:</label>
		<input type="text" name="state">

		<label for="postalCode">Postal Code:</label>
		<input type="number" name="postalCode">

		<label for="country">Country:</label>
		<input type="text" name="country" required>

		<label for="salesRepEmployeeNumber">Sales Rep Employee Number:</label>
		<select name="salesRepEmployeeNumber" required>
		<option value="">-- Pilih Sales Rep Employee Number --</option>
		<option value="1">1002</option>
		<option value="2">1056</option>
		<option value="3">1076</option>
		<option value="4">1088</option>
		<option value="5">1102</option>

		</select>

		<label for="creditLimit">Credit Limit:</label>
		<input type="number" name="creditLimit" required>

		<input type="submit" value="Tambahkan Data">
	</form>


</body>
</html>
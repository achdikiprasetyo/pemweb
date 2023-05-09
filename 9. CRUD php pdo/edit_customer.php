<?php
include ('koneksi.php');

if (isset($_POST["submit"])) {
	$customerNumber = $_POST["customerNumber"];
	$customerName = $_POST["customerName"];
	$contactLastName = $_POST["contactLastName"];
	$contactFirstName = $_POST["contactFirstName"];
	$phone = $_POST["phone"];
	$addressLine1 = $_POST["addressLine1"];
	$addressLine2 = $_POST["addressLine2"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$postalCode = $_POST["postalCode"];
	$country = $_POST["country"];
	$salesRepEmployeeNumber = $_POST["salesRepEmployeeNumber"];
	$creditLimit = $_POST["creditLimit"];

	$sql = "UPDATE customers SET customerName=:customerName, contactLastName=:contactLastName, contactFirstName=:contactFirstName, phone=:phone, addressLine1=:addressLine1, addressLine2=:addressLine2, city=:city, state=:state, postalCode=:postalCode, country=:country, salesRepEmployeeNumber=:salesRepEmployeeNumber, creditLimit=:creditLimit WHERE customerNumber=:customerNumber";
	$query = $conn->prepare($sql);
	$query->bindParam(':customerNumber', $customerNumber);
	$query->bindParam(':customerName', $customerName);
	$query->bindParam(':contactLastName', $contactLastName);
	$query->bindParam(':contactFirstName', $contactFirstName);
	$query->bindParam(':phone', $phone);
	$query->bindParam(':addressLine1', $addressLine1);
	$query->bindParam(':addressLine2', $addressLine2);
	$query->bindParam(':city', $city);
	$query->bindParam(':state', $state);
	$query->bindParam(':postalCode', $postalCode);
	$query->bindParam(':country', $country);
	$query->bindParam(':salesRepEmployeeNumber', $salesRepEmployeeNumber);
	$query->bindParam(':creditLimit', $creditLimit);
	$result = $query->execute();

	if ($result) {
		header("Location: tampil_customer.php?message=success-update");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

$customerNumber = $_GET["customerNumber"];
$sql = "SELECT * FROM customers WHERE customerNumber=:customerNumber";
$query = $conn->prepare($sql);
$query->bindParam(':customerNumber', $customerNumber);
$query->execute();

if ($query->rowCount() == 1) {
	$row = $query->fetch();
} else {
	echo "Data tidak ditemukan.";
	exit();
}
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Customer</title>
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
	<h2>Edit Data Customer</h2>
	<a href="index.php">Kembali</a>
	<form method="post">
		<input type="hidden" name="customerNumber" value="<?php echo $row["customerNumber"]; ?>">
		<label>Customer Name:</label><br>
		<input type="text" name="customerName" value="<?php echo $row["customerName"]; ?>"><br>
		<label>Contact Last Name:</label><br>
		<input type="text" name="contactLastName" value="<?php echo $row["contactLastName"]; ?>"><br>
		<label>Contact First Name:</label><br>
		<input type="text" name="contactFirstName" value="<?php echo $row["contactFirstName"]; ?>"><br>
		<label>Phone:</label><br>
		<input type="text" name="phone" value="<?php echo $row["phone"]; ?>"><br>
		<label>Address Line 1:</label><br>
		<input type="text" name="addressLine1" value="<?php echo $row["addressLine1"]; ?>"><br>
		<label>Address Line 2:</label><br>
		<input type="text" name="addressLine2" value="<?php echo $row["addressLine2"]; ?>"><br>
		<label>City:</label><br>
		<input type="text" name="city" value="<?php echo $row["city"]; ?>"><br>
		<label>State:</label><br>
		<input type="text" name="state" value="<?php echo $row["state"]; ?>"><br>
		<label>Postal Code:</label><br>
		<input type="text" name="postalCode" value="<?php echo $row["postalCode"]; ?>"><br>
		<label>Country:</label><br>
		<input type="text" name="country" value="<?php echo $row["country"]; ?>"><br>
		<label>Sales Rep Employee Number:</label><br>
		<input type="text" name="salesRepEmployeeNumber" value="<?php echo $row["salesRepEmployeeNumber"]; ?>"><br>
		<label>Credit Limit:</label><br>
		<input type="text" name="creditLimit" value="<?php echo $row["creditLimit"]; ?>"><br><br>
		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>

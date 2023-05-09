<?php
include ('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

	$query = $conn->prepare("INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES (:customerNumber, :customerName, :contactLastName, :contactFirstName, :phone, :addressLine1, :addressLine2, :city, :state, :postalCode, :country, (SELECT employeeNumber FROM employees WHERE employeeNumber=:salesRepEmployeeNumber), :creditLimit)");
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

	if ($query->execute()) {
		echo "Data berhasil ditambahkan.";
		echo '<br>';    
        echo '<a href="index.php">Kembali</a>';
	} else {
		echo "Terjadi kesalahan: " . $sql . "<br>" . mysqli_error($conn);
	}

	$conn = null;
}
?>
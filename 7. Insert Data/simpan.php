<?php
include "koneksi.php";

// memeriksa apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// memperoleh nilai dari form
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

	// menyimpan data ke database
	$sql = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES ('$customerNumber', '$customerName', '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', '$country', (SELECT employeeNumber FROM employees WHERE employeeNumber='$salesRepEmployeeNumber'), '$creditLimit')";

	if (mysqli_query($conn, $sql)) {
		echo "Data berhasil ditambahkan.";
		echo '<br>';    
        echo '<a href="index.php">Kembali</a>';
	} else {
		echo "Terjadi kesalahan: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>

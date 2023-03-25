<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// memperoleh nilai dari form
	$productCode = $_POST["productCode"];
	$productName = $_POST["productName"];
	$productLine = $_POST["productLine"];
	$productScale = $_POST["productScale"];
	$productVendor = $_POST["productVendor"];
	$productDescription = $_POST["productDescription"];
	$quantityInStock = $_POST["quantityInStock"];
	$buyPrice = $_POST["buyPrice"];
	$MSRP = $_POST["MSRP"];

    // menyimpan data ke database
	$sql = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) VALUES ('$productCode','$productName',(SELECT productLine FROM productLines WHERE productLine='$productLine'),'$productScale','$productVendor','$productDescription','$quantityInStock','$buyPrice','$MSRP')";

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
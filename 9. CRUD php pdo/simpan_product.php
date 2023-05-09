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

    $sql = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) 
            VALUES (:productCode, :productName, (SELECT productLine FROM productLines WHERE productLine=:productLine), :productScale, :productVendor, :productDescription, :quantityInStock, :buyPrice, :MSRP)";
    $query = $conn->prepare($sql);
    $query->bindParam(':productCode', $productCode);
    $query->bindParam(':productName', $productName);
    $query->bindParam(':productLine', $productLine);
    $query->bindParam(':productScale', $productScale);
    $query->bindParam(':productVendor', $productVendor);
    $query->bindParam(':productDescription', $productDescription);
    $query->bindParam(':quantityInStock', $quantityInStock);
    $query->bindParam(':buyPrice', $buyPrice);
    $query->bindParam(':MSRP', $MSRP);

    if ($query->execute()) {
        echo "Data berhasil ditambahkan.";
        echo '<br>';    
        echo '<a href="index.php">Kembali</a>';
    } else {
        echo "Terjadi kesalahan: " . $sql . "<br>" . $query->errorInfo()[2];
    }

    $conn = null;
}
?>

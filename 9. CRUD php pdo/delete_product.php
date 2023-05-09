<?php
include ('koneksi.php');

$productCode = $_GET["productCode"];

$sql = "DELETE FROM products WHERE productCode = :productCode";
$query= $conn->prepare($sql);
$query->bindParam(':productCode', $productCode);

if ($query->execute()) {

    header("Location: tampil_product.php?message=success-delete");
    exit();
} else {
    header("Location: tampil_product.php?message=error");
    exit();
}

$conn = null;
?>

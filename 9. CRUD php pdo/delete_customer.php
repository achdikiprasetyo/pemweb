<?php
include ('koneksi.php');

$customerNumber = $_GET["customerNumber"];

$sql = "DELETE FROM customers WHERE customerNumber = :customerNumber";
$query = $conn->prepare($sql);
$query->bindParam(':customerNumber', $customerNumber);
if ($query->execute()) {
    header("Location: tampil_customer.php?message=success-delete");
    exit();
} else {
    header("Location: tampil_customer.php?message=error");
    exit();
}
$conn = null;
?>

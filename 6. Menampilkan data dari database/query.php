<?php
    $sql = "SELECT customers.customerName, products.productName,orderdetails.priceEach
    FROM customers
    JOIN orders ON customers.customerNumber = orders.customerNumber
    JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber
    JOIN products ON orderdetails.productCode = products.productCode";
    $data_tabel = mysqli_query($conn, $sql);
?>

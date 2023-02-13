<?php
include('connection.php');

$stmp = $conn->prepare("SELECT * FROM products Limit 4 ");
$stmp->execute();
$featured_products = $stmt->get_result();
?>
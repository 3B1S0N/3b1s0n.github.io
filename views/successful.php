<?php
require("../controllers/cartController.php");
session_start();
$customer_id = $_SESSION['user_id'];
$service_id = $_SESSION['service_id'];
$package_id= $_SESSION['package_id'];

$result = remove_cart_controller($customer_id, $package_id, $service_id);
if($result === true) header("Location: ../views/cart.php");
else echo "Database error";



?>
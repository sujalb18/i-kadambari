<?php
require("includes/common.php");
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $quantity = $_POST['quantity']+1;
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_products(user_id, item_id, quantity ,  status) VALUES('$user_id', '$item_id', '$quantity','Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   
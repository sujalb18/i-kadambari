<?php

require "includes/common.php";
session_start();
if(isset($_GET['id']) && isset($_GET['quantity'])){
    $item_id = $_GET['id'];
    $quantity = $_GET['quantity'];
    $user_id = $_SESSION['user_id'];
    mysqli_query($con, "UPDATE users_products set quantity = '$quantity' where item_id='$item_id' AND user_id='$user_id'");
    header("location:cart.php");
}
?>
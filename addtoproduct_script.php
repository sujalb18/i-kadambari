<?php
require ("includes/common.php");
session_start();

$nameofp = $_POST['nameofproduct'];
$imgofp = $_POST['imgofproduct'];
$priceofp = $_POST['priceofproduct'];

$query = "INSERT INTO products(name, price, image) values ('$nameofp' , '$priceofp' , '$imgofp')";

$result = mysqli_query($con , $query);
header("location:products.php")
?>
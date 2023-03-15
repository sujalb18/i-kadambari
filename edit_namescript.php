<?php
require ("includes/common.php");
session_start();

$newfname = $_POST['newfname'];
$newlname = $_POST['newlname'];

$query = "UPDATE users SET first_name = '$newfname', last_name = '$newlname' WHERE id = '$_SESSION[user_id]'";

$result = mysqli_query($con , $query);
header("location:index.php")
?>
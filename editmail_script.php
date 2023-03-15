<?php
require ("includes/common.php");
session_start();


$newemail = $_POST['newemail'];

$query = "UPDATE users SET email_id = '$newemail' WHERE id = '$_SESSION[user_id]'";

$result = mysqli_query($con , $query);
header("location:index.php")
?>
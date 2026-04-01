<?php
session_start();
include("../config/db.php");

$product_id = $_GET['product_id'];
$receiver_id = $_GET['user_id'];
$sender_id = $_SESSION['user_id'];

mysqli_query($conn, "INSERT INTO swap_requests(sender_id,receiver_id,product_id)
                     VALUES('$sender_id','$receiver_id','$product_id')");

echo "Request Sent!";
?>
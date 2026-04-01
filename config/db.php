<?php
$conn = new mysqli("localhost", "root", "", "clothing_swap");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
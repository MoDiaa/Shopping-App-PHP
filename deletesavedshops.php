<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "android_api";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_POST['user_id'];
$shop_id = $_POST['shop_id'];
$product_id = $_POST['product_id'];

$query = mysqli_query($conn, "DELETE FROM `savedshops` WHERE `user_id` = '$user_id' AND
 `shop_id` =  $shop_id AND `product_id` = '$product_id'");

$response["success"] = TRUE;
$response["message"] = "Shop Saved Deleted Successfully";

echo json_encode($response)
?>
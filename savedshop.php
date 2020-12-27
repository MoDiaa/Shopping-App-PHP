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

$query = mysqli_query($conn, "SELECT DISTINCT
 savedshops.id, savedshops.user_id,savedshops.shop_id,savedshops.product_id
    ,shop.name,shop.id
    ,product.name,product.id
FROM savedshops

INNER JOIN shop ON savedshops.shop_id=shop.id
INNER JOIN product ON savedshops.product_id=product.id");

if ($query) {
    while ($row = mysqli_fetch_array($query)) {
        $flag[] = $row;
    }
    print(json_encode($flag));
}
mysqli_close($conn);
/* }  */

?>
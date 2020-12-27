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
$query = mysqli_query($conn, "SELECT * FROM offers");

if ($query) {
    while ($row = mysqli_fetch_array($query)) {
        $flag[] = $row;
    }
    print(json_encode($flag));
}
mysqli_close($conn);
?>
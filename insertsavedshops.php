<?php

require_once 'include/DB_Functions.php';
$db = new DB_Functions();

// json response array
$response = array("error" => false);

if (isset($_POST['user_id']) && isset($_POST['shop_id']) && isset($_POST['product_id'])) {

    // receiving the post params
    $user_id = $_POST['user_id'];
    $shop_id = $_POST['shop_id'];
    $product_id = $_POST['product_id'];

    // create a new user
    $user = $db->storeshop($user_id, $shop_id, $product_id);
    if ($user) {
        // user stored successfully
        $response["error"] = false;
        $response["error_msg"] = "Shop Saved Successfully";

        echo json_encode($response);
    } else {
        // user failed to store
        $response["error"] = true;
        $response["error_msg"] = "Unknown error occurred in registration!";
        echo json_encode($response);
    }
} else {
    $response["error"] = true;
    $response["error_msg"] = "Required Fields are missing!";
    echo json_encode($response);
}

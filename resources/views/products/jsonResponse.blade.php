<?php 

// Allow access from any origin
header("Access-Control-Allow-Origin: *");

// Allow specific HTTP methods (optional)
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Allow specific headers (optional)
header("Access-Control-Allow-Headers: Content-Type, Authorization");


echo json_encode($products);

?>
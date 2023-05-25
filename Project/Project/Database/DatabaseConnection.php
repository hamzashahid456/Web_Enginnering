<?php

/// TO diagnose an type od error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Function for testing data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



// database configuration
$host = "localhost";
$username = "hamza";
$password = "hamza@123";
$database = "web_project";

// Set DSN (Data Source Name)
$dsn = 'mysql:host='. $host .';dbname='.$database;

// Create PDO Instance
$pdo = new PDO($dsn, $username, $password);

?>

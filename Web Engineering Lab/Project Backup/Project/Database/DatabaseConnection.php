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

// create a new mysqli instance
// $mysqli = new mysqli($host, $username, $password, $database);
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// // Insert data into a table
// $sql = "INSERT INTO User (username, userEmail, userPhone, userPassword) VALUES ('value1', 'value2', 'value3')";

// if (mysqli_query($conn, $sql)) {
//     echo "Data inserted successfully";
// } else {
//     echo "Error inserting data: " . mysqli_error($conn);
// }



// // For fetching

// // // perform a SQL query
// // $result = $mysqli->query("SELECT * FROM my_table");

// // // iterate over the result set
// // while ($row = $result->fetch_assoc()) {
// //   echo $row["column_name"];
// // }

// // close the connection
// $mysqli->close();

?>

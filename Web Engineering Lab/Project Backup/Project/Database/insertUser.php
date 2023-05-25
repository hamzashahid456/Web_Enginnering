<?php

    include 'DatabaseConnection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // sanitize and validate the form data      

        $userName = test_input($_POST["username"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        $passWord = test_input($_POST["password"]);

        // Check is username already exists
        // fetch data of table
        $result = $conn->query("SELECT * FROM User");

        // Flag to check if user exists ?!?!
        $flag = 0;
        // iterate over the result set
        while ($row = $result->fetch_assoc()) {
          if ($row["username"] == $userName){
            $flag = 1;
            echo "Username already exists";
            die();
          } 
        }

        // Flag = 0 means username doesn't exist before
        if($flag == 0){
            // Insert data into a table
            $sql = "INSERT INTO User (username, userEmail, userPhone, userPassword) VALUES 
            ('$userName', '$email', '$phone', '$passWord')";

            if (mysqli_query($conn, $sql)) {
                echo "Data inserted successfully";
            } else {
                echo "Error inserting data: " . mysqli_error($conn);
            }
        } else if($flag == 1) {
            echo "Username already exists";
        }

    } else {
        echo "There is issue with the request method";
    }

    // close the connection
    mysqli_close($conn);
?>
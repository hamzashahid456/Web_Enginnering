<?php
    include 'Database/DatabaseConnection.php';     

    session_start(); // Start the session
    $userID = $_SESSION["userID"];
    $questionTitle = test_input($_POST["question-title"]);
    $question = test_input($_POST["question-body"]);

    $sql = "INSERT INTO Questions (userID, questionTitle, question) VALUES 
    ('$userID', '$questionTitle', '$question')";

    if (mysqli_query($conn, $sql)) {
        header('Location: questions.php');
        echo "Question submitted successfully";
    } else {
        echo "Error submitting Question data: " . mysqli_error($conn);
    }

    
    // close the connection
    mysqli_close($conn);
?>
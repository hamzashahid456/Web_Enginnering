<?php
    include 'Database/DatabaseConnection.php';    

    session_start(); // Start the session
    $userID = $_SESSION["userID"];
    $QID = $_SESSION["Question"];
    $answer = test_input($_POST["answer"]);
    $reference = test_input($_POST["reference"]);

    $sql = "INSERT INTO Answers (Q_ID,userID, answer, reference) VALUES 
    ('$QID','$userID', '$answer', '$reference')";

    if (mysqli_query($conn, $sql)) {
        echo "Question submitted successfully";
        header('Location:   answers.php');
    } else {
        echo "Error submitting Question data: " . mysqli_error($conn);
    }
    // close the connection
    mysqli_close($conn);
?>
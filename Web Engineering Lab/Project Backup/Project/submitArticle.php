<?php
    include 'Database/DatabaseConnection.php';     

    session_start(); // Start the session
    $userID = $_SESSION["userID"];
    $articleTitle = test_input($_POST["article-title"]);
    $article = test_input($_POST["article-body"]);

    $sql = "INSERT INTO Articles (userID, articleTopic, article) VALUES 
    ('$userID', '$articleTitle', '$article')";

    if (mysqli_query($conn, $sql)) {
        header('Location: articles.php');
        echo "Question submitted successfully";
    } else {
        echo "Error submitting Question data: " . mysqli_error($conn);
    }

    
    // close the connection
    mysqli_close($conn);
?>
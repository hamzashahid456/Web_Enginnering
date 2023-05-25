<?php
    include 'Database/DatabaseConnection.php';     

    session_start(); // Start the session
    $userID = $_SESSION["userID"];
    $questionTitle = test_input($_POST["question-title"]);
    $question = test_input($_POST["question-body"]);

    $sql = 'insert into Questions(userID, questionTitle, question) 
    values(:userID, :questionTitle, :question)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['userID' => $userID, 'questionTitle' => $questionTitle, 
    'question' => $question]);

    session_start();
    $_SESSION['msg'] = true;
    header('Location: questions.php');
    
?>
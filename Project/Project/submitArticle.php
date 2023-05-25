<?php
    include 'Database/DatabaseConnection.php';     

    session_start(); // Start the session
    $userID = $_SESSION["userID"];
    $articleTitle = test_input($_POST["article-title"]);
    $article = test_input($_POST["article-body"]);

    $sql = "INSERT INTO Articles (userID, articleTopic, article) VALUES 
    ('$userID', '$articleTitle', '$article')";


    $sql = 'insert into Articles (userID, articleTopic, article) 
    values(:uID, :artTopic, :art)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['uID' => $userID, 'artTopic' => $articleTitle, 
    'art' => $article]);

    session_start();
    $_SESSION['msg'] = true;
    header('Location: articles.php');
?>
<?php
    include 'Database/DatabaseConnection.php';    

    session_start(); // Start the session
    $userID = $_SESSION["userID"];
    $QID = $_SESSION["Question"];
    $answer = test_input($_POST["answer"]);
    $reference = test_input($_POST["reference"]);

    $sql = "INSERT INTO Answers (Q_ID,userID, answer, reference) VALUES 
    ('$QID','$userID', '$answer', '$reference')";


    $sql = 'insert into Answers(Q_ID,userID, answer, reference) 
    values(:qID, :uID, :ans, :ref)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['qID' => $QID, 'uID' => $userID, 
    'ans' => $answer, 'ref' => $reference]);

    session_start();
    $_SESSION['msg'] = true;
    header('Location:   answers.php');
?>
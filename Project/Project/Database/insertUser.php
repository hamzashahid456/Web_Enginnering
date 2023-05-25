<?php

    include 'DatabaseConnection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // sanitize and validate the form data      

        $userName = test_input($_POST["username"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        $passWord = test_input($_POST["password"]);

        // If you want to set fetch process default
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,     PDO::FETCH_OBJ);

        $stmt = $pdo->query('select * from User');

        // Flag to check if user exists ?!?!
        $flag = 0;
        // iterate over the result set
        while ($row = $stmt->fetch()) {
          if ($row->username == $userName){
            $flag = 1;
            echo "Username already exists";
            die();
          } 
        }

        // Flag = 0 means username doesn't exist before
        if($flag == 0){

            $sql = 'insert into User(username, userEmail, userPhone, userPassword) 
            values(:username, :useremail, :userphone, :userpassword)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['username' => $userName, 'useremail' => $email, 
            'userphone' => $phone, 'userpassword' => $passWord]);
            
            session_start();
            $_SESSION['msg'] = "Data inserted successfully";
            header('Location: ../login.php');
            
        } else if($flag == 1) {
            echo "Username already exists";
        }

    } else {
        echo "There is issue with the request method";
    }
?>
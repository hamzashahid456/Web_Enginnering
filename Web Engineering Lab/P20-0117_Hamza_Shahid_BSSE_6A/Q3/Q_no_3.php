<?php

    if($_REQUEST.method == "_POST"){
        $name = $_REQUEST("name");
        $email = $_REQUEST("email");

        $servername = "localhost";
        $username = "hamza";
        $password = "hamza@123";
        $database = "Lab_Exam";

        $conn = mysqli_connect($servername, $username, $password, $database);

        $query = "SELECT * FROM user where email = $email";

        $res = mysqli($conn, $query);


        foreach($row as $res){
            if($row['email'] == $email){
                echo "Record already exists";
            } else {
                $query2 = "INSERT INTO(username, email) VALUES ($username, $email)";

                $res2 = mysqli($conn, $query);
                if($res2){
                    echo "Record inserted successfully";
                } else {
                    echo "Insertion err";
                }
            }
        }




    }
?>
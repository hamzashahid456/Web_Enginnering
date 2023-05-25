<?php

    include 'Database/DatabaseConnection.php';

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // sanitize and validate the form data      

          $userName = test_input($_POST["username"]);
          $passWord = test_input($_POST["password"]);

          // fetch data of table
          $sql = $conn->query("SELECT * FROM User");

          // Flag to check if user exists ?!?!
          $flag = false;
        
          // iterate over the result set
          while ($row = $sql->fetch_assoc()) {
            if ($row["username"] == $userName && $row["userPassword"] == $passWord){
              $userID = $row["userID"];
              $flag = true;
              break;
              
            } 
          }

          // Setting session
          session_start(); // start the session
          $_SESSION["userID"] = $userID;
          // close the session
          // session_write_close();

          if($flag){
            header('Location: index.php');
            die();
          } else {
            echo "User doesn't exists!!!";
          }

      } else {
          echo "There is issue with the request method";
      }
    // close the connection
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
  <head>
    <link href="CSS/form.css" type="text/css" rel="stylesheet" />
  </head>
  <body>

    <form class="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
      <div class="container">
        <h3>Login Here</h3>
        <p>Username: 
          <input type="text" name="username" size="15" maxlength="30" />
        </p>

        <p>Password: 
          <input type="password" name="password" size="15" maxlength="13" />
        </p>
            
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit">Login</button>
      </div>

      <span class="psw">Forgot <a href="#">password?</a></span>
    </form>

  </body>
</html>


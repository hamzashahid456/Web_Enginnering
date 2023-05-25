<?php
session_start();
  if(isset($_SESSION['msg'])){
    if($_SESSION['msg']){
      echo "<script>alert('Question Posted successfully')</script>";
      unset($_SESSION['msg']);
    }
  }
?>

<?php include'inc/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Questions</title>
	<style>
		h1 {
			text-align: center; /* center the heading */
			margin-bottom: 20px; /* add some margin below the heading */
		}
		ul {
			list-style: none; /* remove the bullet points from the list */
			padding: 0; /* remove the default padding */
			margin: 0; /* remove the default margin */
		}
		li {
			margin-bottom: 10px; /* add some margin between each list item */
			background-color: #555; /* set the background color of each list item */
			padding: 10px; /* add some padding to each list item */
			border-radius: 5px; /* add some border radius to make the corners round */
		}
		.btn a {
			background-color: #fff;
			border: none;
			border-radius: 5px;
			color: #333;
			font-size: 24px;
			margin-top: 20px;
			padding: 10px 30px;
			cursor: pointer;
		} 
	</style>
</head>
<body>
    <div class="content">
        <div class="question">
        <center><h2>Questions</h2></center>
        <ul>
            <!-- Using php for accessing the questions stored in database -->
            <?php
            include 'Database/DatabaseConnection.php';

			// If you want to set fetch process default
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,     PDO::FETCH_OBJ);

			$stmt = $pdo->query('select * from Questions');

            // Flag to check if user exists ?!?!
            $flag = false;
            
            // iterate over the result set
            while ($row = $stmt->fetch()) { ?>

					<?php // save QuestionID in the session
					// session_start();
                    $_SESSION["Question"] = $row->Q_ID; ?>

                <li><a href="answers.php"><?php print_r( $row->question );?> </a></li>

            <?php } ?>

        </ul>
        </div>
		<div class="btn">
			<br><br>
			<center>
			<a  href="postQuestion.php">Post your Question</a> </center>	
		</div>
        
    </div>  
	
</body>
</html>

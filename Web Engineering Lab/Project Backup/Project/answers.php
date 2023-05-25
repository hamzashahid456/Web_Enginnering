<?php include 'inc/header.php'; ?>
<!-- First we will show previous answers of that particular question -->
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
        <center><h2>Answers</h2></center>
        <ul>
            <!-- Using php for accessing the questions stored in database -->
            <?php
            session_start();
            include 'Database/DatabaseConnection.php';
            $sql = $conn->query("SELECT * FROM Answers");

			if(isset($_SESSION['Question'])){
				// Flag to check if user exists ?!?!
				$QID = $_SESSION["Question"];
            
				// iterate over the result set
				while ($row = $sql->fetch_assoc()) { 
					if ($row["Q_ID"] == $QID){ ?>
						<li><a href="#"><?php print_r( $row['answer'] );?> </a></li>
					<?php }
				}
			} else {
				echo "Question ID is not working!!";
			}
             ?>

        </ul>
        </div>

		<div class="btn">
			<br><br>
			<center>
			<a href="postAnswer.php">Post your Answer</a>
			 </center>	
		</div>

        
    </div>  
	
</body>
</html>

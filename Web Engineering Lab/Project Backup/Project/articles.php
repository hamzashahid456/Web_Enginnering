<?php include'inc/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
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
		p, li {
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
        <div class="articles">
        <center><h2>Articles</h2></center>
        <ul>
            <!-- Using php for accessing the questions stored in database -->
                <?php
                    include 'Database/DatabaseConnection.php';
                    $sql = $conn->query("SELECT * FROM Articles");

                    // iterate over the result set
                    while ($row = $sql->fetch_assoc()) {
                        $user = $row['userID']; ?>
                        <h2><?php echo $row['articleTopic']; ?></h2>
                        <p><?php echo $row['article']; ?></p>

                        <!-- To extract username of publisher -->
                        <?php
                        $user_sql = "SELECT User.username FROM User JOIN Articles ON User.userID = $user";
                        $user_result = $conn->query($user_sql);
                        if ($user_result->num_rows > 0) {
                            $user_row = $user_result->fetch_assoc();
                        ?>
                            <p>Published by: <?php echo $user_row['username']; ?></p><br><br>
                        <?php
                        }
                    }
                ?>


        </ul>
        </div>

        <div class="btn">
			<br><br>
			<center>
			    <a href="postArticle.php">Post your Article</a>
			 </center>	
		</div>

        
    </div>  
	
</body>
</html>

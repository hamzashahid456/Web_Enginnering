<?php include 'inc/header.php'; ?>

<style>
        /* For answering section */

        .post-answer {
            background-color: #333; /* Dark background color */
            color: #fff; /* Text color */
            padding: 80px;
        }

        .post-answer h2 {
            margin-top: 0;
        }

        .post-answer label {
            display: block;
            margin-bottom: 5px;
        }

        .post-answer input,
        .post-answer textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }

        .post-answer button[type="submit"] {
            background-color: #fff;
            color: #333;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
	</style>


<body>

    <?php
        if(isset($_SESSION['userID'])) { 
        } else {
            header('Location: loginError.php');
        }
    ?>

    <div class="content">
        <!-- For the user to answer  -->
        <br>
        <div class="content">
            <div class="post-answer">
            <center><h2>Post Your Answer</h2></center>
            <form class="content" action="submitAnswer.php" method="POST">
                <!-- For answer -->
                <label for="answer-body">Answer:</label>
                <textarea id="answer-body" name="answer" required></textarea>
                <!-- For reference -->
                <label for="answer-title">Reference:</label>
                <input type="text" id="answer-title" name="reference" required><br>
                
                <button type="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>



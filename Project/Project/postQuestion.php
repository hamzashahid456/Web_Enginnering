<?php include 'inc/header.php'; ?>

<style>
    .post-question {
        background-color: #333; /* Dark background color */
        color: #fff; /* Text color */
        padding: 80px;
    }

    .post-question h2 {
        margin-top: 0;
    }

    .post-question label {
        display: block;
        margin-bottom: 5px;
    }

    .post-question input,
    .post-question textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
    }

    .post-question button[type="submit"] {
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

    <br>
    <div class="content">
        <div class="post-question">
        <center><h2>Post a Question</h2></center>
        <form class="content" action="submitQuestion.php" method="POST">
            <label for="question-title">Question Title:</label>
            <input type="text" id="question-title" name="question-title" required><br>
            <label for="question-body">Question Body:</label>
            <textarea id="question-body" name="question-body" required></textarea>
            <button type="submit">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>

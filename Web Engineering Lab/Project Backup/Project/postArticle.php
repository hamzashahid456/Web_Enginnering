<?php include 'inc/header.php'; ?>

<style>
    .post-article {
        background-color: #333; /* Dark background color */
        color: #fff; /* Text color */
        padding: 80px;
    }

    .post-article h2 {
        margin-top: 0;
    }

    .post-article label {
        display: block;
        margin-bottom: 5px;
    }

    .post-article input,
    .post-article textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
    }

    .post-article button[type="submit"] {
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
        <div class="post-article">
        <center><h2>Post a Article</h2></center>
        <form class="content" action="submitArticle.php" method="POST">
            <label for="article-title">Article Title:</label>
            <input type="text" id="article-title" name="article-title" required><br>
            <label for="article-body">Article Body:</label>
            <textarea id="article-body" name="article-body" required></textarea>
            <button type="submit">Post</button>
        </form>
        </div>
    </div>
</body>
</html>

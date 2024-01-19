<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <style>
        nav {
            background-color: #333;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <?= "HOMEPAGE" ?>

    <nav>
    <a href="View/home.php">HOME</a>
    <a href="View/articles/index.php">ARTICLES</a>
</nav>
</body>
</html> -->

<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <p><a href="index.php?page=articles">To articles page</a></p>

    <p>Put your content here.</p>
</section>

<?php require 'View/includes/footer.php'?>
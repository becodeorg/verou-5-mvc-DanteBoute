<?php require 'View/includes/header.php'?>

<?php 
// Use any data loaded in the controller here ?>

<section>
    <h1>Articles</h1>
    <hr>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li><a href="?page=show&id=<?= $articleId ?>"><?= $article->title ?> <?= $article->formatPublishDate() ?></a></li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'View/includes/footer.php'?>
<?php require 'View/includes/header.php'?>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->publish_date ?></p>
    <p><?= $article->description ?></p>
    
    <?php // TODO: PREVIOUS AND NEXT ?>
    <a href="index.php?page=show&id=<?= (int)$article->getId() - 1 ?>">Previous article</a>
    <a href="index.php?page=show&id=<?= (int)$article->getId() + 1 ?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>
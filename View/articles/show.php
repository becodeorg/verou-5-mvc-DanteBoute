<?php require 'View/includes/header.php'?>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->publish_date ?></p>
    <p><?= $article->description ?></p>
    
    <?php if ((int)$article->id - 1 <= 0) { ?>
        <span class="disabled">Previous article</span>
    <?php } else { ?>
        <a href="index.php?page=show&id=<?= (int)$article->id - 1 ?>">Previous article</a>
    <?php } ?>
    <?php if ((int)$article->id + 1 > 5) { ?>
        <span class="disabled">Next article</span>
    <?php } else { ?>
        <a href="index.php?page=show&id=<?= (int)$article->id + 1 ?>">Next article</a>
    <?php } ?>
</section>

<?php require 'View/includes/footer.php'?>
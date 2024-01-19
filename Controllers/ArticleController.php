<?php

declare(strict_types = 1);

class ArticleController
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $dbm)
    {
        $this->databaseManager = $dbm;
    }
    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles()
    {
        $sql = "SELECT * FROM articles";
        $statement = $this->databaseManager->connection->prepare($sql);
        $statement->execute();
        // TODO: prepare the database connection
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)
        $articles = [];
        $rawArticles = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }

        return $articles;
    }

    public function show($articleId)
    {
        // TODO: this can be used for a detail page

        try {
            $sql = "SELECT * FROM cards WHERE id = :id ;";
            $statement = $this->databaseManager->connection->prepare($sql);
            $statement->bindParam(':id', $_GET['id']);
            $statement->execute();
            $article = $statement->fetch(PDO::FETCH_ASSOC);
            return $article;
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
            return [];
        }
    }
}
<?php
require_once 'Core/DatabaseManager.php'; // Include the DatabaseManager class

class Article
{
    private $databaseManager;
    private $tableName = 'articles';

    // The DatabaseManager (green text) is a TYPEHINT of $databaseManager
    // so only objects of the 'Databasemanager' type are allowed as arguments in this constructor.
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function getAllArticles()
    {
        try {
            $this->databaseManager->connect();
            $query = "SELECT * FROM $this->tableName";
            $statement = $this->databaseManager->connection->query($query);
            return $statement->fetchAll();
        } catch (Exception $e) {
            // Handle the exception as needed
            echo "Error: " . $e->getMessage();
        }
    }
}
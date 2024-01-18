<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require_once 'Models/Article.php';
//include all your controllers here
require_once 'config.php';
require_once 'Controllers/HomepageController.php';
require_once 'Controllers/ArticleController.php';

require_once 'Core/DatabaseManager.php';
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect(); // Connect to the database

// Get the current page to load
// If nothing is specified, it will remain empty (home should be loaded)
$page = $_GET['page'] ?? null;

// Load the controller
// It will *control* the rest of the work to load the page
switch ($page) {
    case 'articles-index':
        // This is shorthand for:
        // $articleController = new ArticleController;
        // $articleController->index();
        (new ArticleController($databaseManager))->index();
        break;
    case 'articles-show':
        // TODO: detail page
    case 'home':
    default:
        (new HomepageController())->index();
        break;
}
<?php

require_once 'src/ArticleRepository.php';
require_once 'src/Models/Article.php';

// The update process should work roughly like:
// Accept an ID as a query parameter in an HTTP GET request

$articleRepository = new ArticleRepository("articles.json");
$articles = $articleRepository->getArticleById($id = $_GET['id']);

// Find that Article
// Populate the update form with the article information
// Make an HTTP POST request when the <form> is submitted

// Do you need to submit data to the server side that shouldn't be editable, such as an ID?
// Look into the hidden <input> type
?>

<!doctype html>
<html lang="en">
<?php require_once 'layout/header.php' ?>
<body>
<?php require_once 'layout/navigation.php' ?>
<form>
    <input type="text" name="title"><br> <br>
    <input type="hidden" name="title">
    <input type="submit">
</form>
</body>
</html>

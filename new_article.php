<?php

require_once 'src/ArticleRepository.php';
require_once 'src/Models/Article.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $link = $_POST['link']; // the link name here will depend on what name attribute the new input has
    $articleRepository->saveNewArticle($title, $link);
}

$articleRepository = new ArticleRepository('articles.json');
$articles = $articleRepository->getAllArticles(); 
// We can create a <form> here that will make an HTTP POST request to the server
// in order to save a new article to file.
?>

<!doctype html>
<html lang="en">
<?php require_once 'layout/header.php' ?>
<body>
<?php require_once 'layout/navigation.php' ?>
    <form action="new_article.php" method="post">
    <label>Title:
    <input class="gv-input" type="text" name="title"><br> <br>
    </label>
    
    <label>
    <input type="submit" value="Submit">
    </label>
    </form>
</body>
</html>

<style>
    .gv-input {
        border:1px solid;
    }
	form {
		text-align:center;
        margin:70px;
	}
</style>

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
<h2 style="font-weight:900; font-size:30px; text-align:center;">Update Articles</h2><br>

    <label>
    <input type="text" name="title"><br> <br>
    <input type="text" name="link"> <br> <br>
    </label>
    
    <label>
    <input class="btn" type="submit" value="Submit">
    </label>
</form>
</body>
</html>

<style>
    input[type="text"], select {
        width: 50%;
        padding: 3px 20px;
        margin: 2px 0;
        box-sizing: border-box;
        border: 1px solid;
    }
    input[type=submit] {
        border:none;
        color:white;
        width: 50%;
        padding: 5px;
        background:#1EAE00;
        border-radius:5px;
        margin: 2px 0;
        cursor:pointer;
    }
	form {
		text-align:center;
        margin:70px;
	}
</style>

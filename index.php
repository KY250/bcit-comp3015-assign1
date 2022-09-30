<?php

require_once 'src/ArticleRepository.php';
require_once 'src/Models/Article.php';

// We will need to use the repository to get all Articles, and use a loop to go through them all and print the links out.
$articleRepository = new ArticleRepository('articles.json');
$articles = $articleRepository->getAllArticles(); 

?>

<!doctype html>
<html lang="en">
<?php require_once 'layout/header.php' ?>
<body>
<?php require_once 'layout/navigation.php' ?>
<form>
<h2 style="font-weight:900; font-size:30px;">Articles</h2><br>

	<?php foreach($articles as $article): ?>
        <div>
            <?php echo $article->getTitle(); ?> 
        </div>
    <?php endforeach; ?>

	<!-- <button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button> -->
</form>
</body>
</html>

<style>
	form {
		text-align:center;
	}
	img {
		margin:5px;
		width:20px;
		height:20px;
	}
</style>

<?php

require_once 'src/ArticleRepository.php';
require_once 'src/Models/Article.php';

// We will need to use the repository to get all Articles, and use a loop to go through them all and print the links out.
?>

<!doctype html>
<html lang="en">
<style>
	form {
		text-align:center;
	}
	img {
		width:20px;
		height:20px;
	}
</style>
<?php require_once 'layout/header.php' ?>
<body>
<?php require_once 'layout/navigation.php' ?>
<form>
	<h2 style="font-weight:900; font-size:30px;">Articles</h2><br>
	<a href="#" target="_blank">Boston Celtics suspend head coach lme Udoka for entire NBA season</a> 
	<button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button> <br>

	<a href="#" target="_blank">Ines Lakalech makes history with Ladies Open de France win</a> 
	<button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button> <br> 
	
	<a href="#" target="_blank">'We are this good': Swedish golf's rising star hopes history-making win will be watershed moment for women's game</a> 
	<button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button> <br>
	
	<a href="#" target="_blank">Roger Federer set to play 'special' final match of career on Friday with Rafael Nadal</a> 
	<button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button> <br>
	
	<a href="#" target="_blank">Serena Williams teases return to competitive tennis, says Tom Brady 'started a really cool trend'</a> 
	<button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button> <br>
	
	<a href="#" target="_blank">Gus Kenworthy: From pop-culture celebrity to Beijing 2022. Winter Olympian is looking to leave his final marks on skiing</a> 
	<button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button> <br>
	
	<a href="#" target="_blank">Stripes be gone: Canucks make subtle uniform change</a> 
	<button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button> <br>
	
	<a href="#" target="_blank">www.example.com Article Link!</a> 
	<button type="button"><img src="img/pencil.png"/></button> <button type="button"><img src="img/delete-button.png"/></button>
</form>
</body>
</html>
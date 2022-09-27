<?php

require_once 'src/ArticleRepository.php';
require_once 'src/Models/Article.php';

// The update process should work roughly like:
// Accept an ID as a query parameter in an HTTP GET request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['porfile_picture'];
    $temporaryPath = $file['tmp_name'];
    $originalFileName = $file['name'];
    move_uploaded_file($temporaryPath, __DIR__ . "/img/$originalFileName");
}
header('Location: index.php');
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
<form action="update_article.php" method="post" enctype="mutiplart/form-data">
  <input type="text" name="title"><br> <br>
  <input type="text" name="url"><br> <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
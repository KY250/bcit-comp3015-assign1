<?php

require_once 'src/ArticleRepository.php'; // Hint. You'll need this.

// Accept the ID as a query parameter of an HTTP GET request
// then, call a function such as ArticleRepository@deleteArticleById($id)
// After that, redirect the user back to the index page (use the header function for this)
?>

<!doctype html>
<html lang="en">
<?php require_once 'layout/header.php' ?>
<body>
<?php require_once 'layout/navigation.php' ?>
<form>
  <input type="text" id="fname" name="fname"><br> <br>
  <input type="text" id="lname" name="lname"><br> <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>

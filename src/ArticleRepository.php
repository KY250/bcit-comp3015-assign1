<?php

require_once 'src/Models/Article.php';

class ArticleRepository {

	private string $filename;

	public function __construct(string $filename) {
		$this->filename = $filename;
	}

	/**
	 * @return Article[]
	 * Refer to lab 2 for some help with this one. Is there much difference from the getAllArticles function?
	 */
	public function getAllArticles(): array {
		// If the file doesn't exist, we have no books to read!
		if (!file_exists($this->filename)) {
			return [];
		}

		// If we get a falsy value back from file_get_contents, we won't have anything to parse to JSON
		$fileContents = file_get_contents($this->filename);
		if (!$fileContents) {
			return [];
		}

		// The string happens to be in JSON format, so pass it to json_decode
		// The 2nd parameter requests an associative array return value
		$decodedArticles = json_decode($fileContents, true);
		if (json_last_error() !== JSON_ERROR_NONE) {
			return []; // A JSON error occurred in our parsing attempt -- return empty to the caller
		}

		// Create an empty list and fill the Book objects with the JSON
		$articles = [];
		foreach ($decodedArticles as $articleData) {
			$articles[] = (new Article())->fill($articleData);
		}

		// Return the array of Books back to the caller
		return $articles;
	}

	/**
	 * @param int $id
	 * @return Article|null
	 */
	public function getArticleById(int $id): Article|null {
		$articles = $this->getAllArticles();
		foreach ($articles as $article) {
			if ($article->getIdentification() === $id) {
				return $article;
			}
		}
		return null;
	}

	/**
	 * @param int $id
	 */
	public function deleteArticleById(int $id): void {
		$articles = $this->getAllArticles();
		foreach ($articles as $key => $article) {
			if ($article->getIdentification() === $id) {
				unset($articles[$key]);
			}
		}
		file_put_contents($this->filename, json_encode(array_values($articles), JSON_PRETTY_PRINT));
	}

	/**
	 * @param Article $article
	 */
	public function saveArticle(Article $article): void {
		// Get all Books in the repository as an array
		$articles = $this->getAllArticles();

		// Add the new Book to the array
		$articles[] = $article;

		// Encode the Books array as JSON
		$jsonEncodedBooks = json_encode($articles, JSON_PRETTY_PRINT);

		// Write all Books (which now includes the newly added $article) to the file
		file_put_contents($this->filename, $jsonEncodedBooks);
	}

	/**
	 * @param int $id
	 * @param Article $newArticle
	 */
	public function updateArticle(int $id, Article $newArticle): void {
		$articles = $this->getAllArticles();
		foreach ($articles as $key => $article) {
			if ($article->getIdentification() === $id) {
				$articles[$key] = $newArticle;
			}
		}
		file_put_contents($this->filename, json_encode($articles, JSON_PRETTY_PRINT));
	}

}

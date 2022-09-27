<?php

// Should we implement an interface as we did in lab 2? Might help us serialize objects.
class Article implements JsonSerializable{

	// Add properties and methods here
	// Something like an $title, $url and $id would be reasonable
	// Refer to lab 2 for a similar model implementation
	private string $title;
	private string $authorName;
	private string $id;

	/**
	 * @param string $theTitle
	 * @param string $theAuthor
	 * @param string $id
	 */
	public function __construct(string $theTitle = '', string $theAuthor = '', string $id = '') {
		$this->setTitle($theTitle);
		$this->setAuthor($theAuthor);
		$this->setIdentification($id);
	}

	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle(string $title): void {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getAuthor(): string {
		return $this->authorName;
	}

	/**
	 * @param string $authorName
	 */
	public function setAuthor(string $authorName): void {
		$this->authorName = $authorName;
	}

	/**
	 * @return string
	 */
	public function getIdentification(): string {
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setIdentification(string $id): void {
		$this->id = $id;
	}

	/**
	 * We need to implement this method since we use the JsonSerializable interface
	 * @return string[]
	 */
	public function jsonSerialize(): array {
		return [
			'title' => $this->getTitle(),
			'authorName' => $this->getAuthor(),
			'id' => $this->getIdentification(),
		];
	}

	/**
	 * @param $articleData
	 *  an associative array of book data e.g.
	 *      [
	 *          'title' => 'Lord of the Rings',
	 *          'author' => 'J.R.R Tolkien',
	 *          'id' => '9780358653035'
	 *      ]
	 */
	public function fill(array $articleData): Article {
		foreach ($articleData as $key => $value) {
			$this->{$key} = $value;
		}
		return $this;
	}
}

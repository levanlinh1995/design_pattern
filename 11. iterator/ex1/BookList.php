<?php

include_once 'Book.php';

class BookList {
    private $books = [];
    private $bookCount = 0;

    public function __construct() {}

    public function getBookCount(): int {
        return $this->bookCount;
    }

    public function addBook(Book $book_in): void {
        $this->bookCount++;
        $this->books[] = $book_in;
    }

    public function getBook(int $index) {
        if (is_numeric($index) && $index <= $this->bookCount) {
            return $this->books[$index];
        } else {
            return NULL;
        }
    }

    public function removeBook(Book $book_in): void {
        $size = count($this->books);

        for ($i = 0; $i < $size; $i++) {
            if ($this->books[$i]->getAuthorAndTitle() == $book_in->getAuthorAndTitle()) {
                $this->bookCount--;
                unset($this->books[$i]);
            }
        }
    }
}
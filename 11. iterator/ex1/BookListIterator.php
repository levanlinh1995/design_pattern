<?php

include_once 'CustomIterator.php';
include_once 'BookList.php';

class BookListIterator implements CustomIterator {
    protected $bookList;
    protected $currentBook = 0;

    public function __construct(BookList $bookList) {
        $this->bookList = $bookList;
    }

    public function hasNext() {
        if ($this->bookList->getBookCount() > $this->currentBook) {
            return true;
        } else {
            return false;
        }
    }

    public function next() {
        if ($this->hasNext()) {
            return $this->bookList->getBook($this->currentBook++);
        } else {
            return NULL;
        }
    }
}
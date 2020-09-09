<?php

include_once 'BookList.php';
include_once 'Book.php';
include_once 'BookListIterator.php';

$firstBook = new Book('core php programming', 'linh');
$secondBook = new Book('core php programming 1', 'linh');
$thirdBook = new Book('core php programming 2', 'linh');

$books = new BookList();
$books->addBook($firstBook);
$books->addBook($secondBook);
$books->addBook($thirdBook);

$bookIterator = new BookListIterator($books);

while($bookIterator->hasNext()) {
    $book = $bookIterator->next();
    echo $book->getAuthorAndTitle() . PHP_EOL;
}
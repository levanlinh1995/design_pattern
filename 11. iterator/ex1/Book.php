<?php

class Book {
    private $author;
    private $title;

    public function __construct(string $title_in, string $author_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthorAndTitle(): string {
        return $this->title . ' by ' . $this->author;
    }
}
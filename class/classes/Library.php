<?php

  class Library
  {
    // Property
    private $books;

    // Constructor
    public function __construct()
    {
      $this->books = array();
    }

    // Method to add a book
    public function addBook(Book $book)
    {
      $this->books[] = $book;
    }

    // Method to list all books
    public function listBooks()
    {
      foreach ($this->books as $book) {
        echo $book->getBookInfo() . PHP_EOL;
      }
    }
  }

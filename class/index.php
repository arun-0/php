<?php

  require_once 'classes/Book.php';
  require_once 'classes/Library.php';

// Creating instances of Book
  $book1 = new Book("1984", "George Orwell", "1234567890");
  $book2 = new Book("To Kill a Mockingbird", "Harper Lee", "0987654321");

// Creating an instance of Library
  $library = new Library();

// Adding books to the library
  $library->addBook($book1);
  $library->addBook($book2);

// Listing all books in the library
  $library->listBooks();

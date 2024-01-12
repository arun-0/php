<?php

  use classes\Book;
  use classes\Ebook;
  use classes\Library;

  require_once 'classes/Book.php';
  require_once 'classes/Ebook.php';
  require_once 'classes/Library.php';

  $book = new Book("1984", "George Orwell", "1234567890");
  $ebook = new Ebook("Brave New World", "Aldous Huxley", "9876543210", "5MB");

  $library = new Library();
  $library->addBook($book);
  $library->addBook($ebook);

  $library->listBooks();
  echo "<br><br>";

  echo $book->read(); // Demonstrating interface method
  echo "<br><br>";
  echo $ebook->generateId(); // Demonstrating trait method

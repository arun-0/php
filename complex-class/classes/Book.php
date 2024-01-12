<?php

  namespace classes;

  use interfaces\Readable;
  use traits\Identifiable;

  require_once 'interfaces/Readable.php';
  require_once 'traits/Identifiable.php';

  class Book implements Readable {
    use Identifiable;

    // Properties
    private $title;
    private $author;
    private $isbn;

    // Constructor
    public function __construct($title, $author, $isbn) {
      $this->title = $title;
      $this->author = $author;
      $this->isbn = $isbn;
    }

    // Methods
    public function getTitle() {
      return $this->title;
    }

    public function getAuthor() {
      return $this->author;
    }

    public function getIsbn() {
      return $this->isbn;
    }

    public function getBookInfo() {
      return "Title: " . $this->title . ", Author: " . $this->author . ", ISBN: " . $this->isbn;
    }


    public function read() {
      return "Reading " . $this->title;
    }
  }

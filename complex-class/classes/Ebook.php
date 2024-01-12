<?php

  require_once 'Book.php';

  class Ebook extends Book
  {
    private $fileSize;

    public function __construct($title, $author, $isbn, $fileSize)
    {
      parent::__construct($title, $author, $isbn);
      $this->fileSize = $fileSize;
    }

    public function getFileSize()
    {
      return $this->fileSize;
    }
  }

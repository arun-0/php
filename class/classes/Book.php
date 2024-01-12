<?php

class Book
{
  // Properties
  private $title;
  private $author;
  private $isbn;

  // Constructor
  public function __construct($title, $author, $isbn)
  {
    $this->title = $title;
    $this->author = $author;
    $this->isbn = $isbn;
  }

  // Methods
  public function getTitle()
  {
    return $this->title;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function getIsbn()
  {
    return $this->isbn;
  }

  public function getBookInfo()
  {
    return "Title: " . $this->title . ", Author: " . $this->author . ", ISBN: " . $this->isbn;
  }
}
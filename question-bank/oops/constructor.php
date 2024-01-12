<!--28.	Write a program to perform constructor and destructor in class.-->

<?php

  class MyClass {
    // Constructor
    public function __construct() {
      echo "Constructor called!<br>";
    }

    // Destructor
    public function __destruct() {
      echo "Destructor called!<br>";
    }

    // Method
    public function showMessage() {
      echo "Hello, World!<br>";
    }
  }

  // Create an object of the class
  $obj = new MyClass();

  // Call the method
  $obj->showMessage();
?>

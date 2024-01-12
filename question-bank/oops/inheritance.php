<!--29.	Write a program to perform inheritance.-->

<?php

  // Base class
  class Animal {
    public $name;

    public function __construct($name) {
      $this->name = $name;
    }

    public function eat() {
      echo $this->name . " is eating.<br>";
    }
  }

  // Derived class
  class Cat extends Animal {
    public function meow() {
      echo $this->name . " says meow.<br>";
    }
  }

  // Create objects
  $animal = new Animal("Generic Animal");
  $cat = new Cat("Whiskers");

  // Use inherited methods
  $animal->eat();
  $cat->eat();
  $cat->meow();
?>

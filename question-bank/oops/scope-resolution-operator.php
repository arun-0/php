<!--30.	Write a program to perform scope resolution operator in class.-->

<?php

  // Base class
  class ParentClass {
    const CONSTANT_VALUE = "I am a constant";

    public static function staticMethod() {
      echo "Static method in ParentClass.<br>";
    }
  }

  // Derived class
  class ChildClass extends ParentClass {
    public static function staticMethod() {
      echo "Static method in ChildClass.<br>";
      parent::staticMethod(); // Call the static method from the parent class
      echo parent::CONSTANT_VALUE . "<br>"; // Access constant from the parent class
    }
  }

  // Call the static method from the child class
  ChildClass::staticMethod();
?>


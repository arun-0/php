<!--27.	Write a program to create a class and object.-->

<?php

  class Student
  {
    // Properties
    public $name;
    public $rollNumber;

    // Constructor
    public function __construct($name, $rollNumber)
    {
      $this->name = $name;
      $this->rollNumber = $rollNumber;
    }

    // Method
    public function displayInfo()
    {
      echo "Name: {$this->name}, Roll Number: {$this->rollNumber}";
    }
  }

  // Create an object of the class
  $student1 = new Student("John Doe", "MCA123");

  // Call the method
  $student1->displayInfo();
?>

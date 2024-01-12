<?php

  echo "<br><br>";
  // For Loop
  for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i<br>";
  }

  // While Loop
  $j = 1;
  while ($j <= 5) {
    echo "Iteration $j<br>";
    $j++;
  }

  // Do-While Loop
  $k = 1;
  do {
    echo "Iteration $k<br>";
    $k++;
  } while ($k <= 5);


  // foreach loop

  // On an indexed array
  $fruits = ["Apple", "Banana", "Cherry"];
  foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
  }

  // On an associative array
  $person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
  ];
  foreach ($person as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
  }

  // on an object
  class MyData {
    public $property1 = "Value 1";
    public $property2 = "Value 2";
    public $property3 = "Value 3";
  }

  $myObject = new MyData();
  foreach ($myObject as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
  }


  // other loop for arrays and objects.
  // Each method has its own use cases and benefits.
  // foreach is generally the most versatile and user-friendly, while
  // for and while loops offer more control.
  // The array_walk and array_map functions are more functional programming style
  // and are useful for applying operations to each element of an array.
  // The choice of method depends on the specific requirements of your code and your personal coding style preferences.
  for ($i = 0; $i < count($fruits); $i++) {
    $fruits[$i];
  }

  // while Loop with each and list
  while (list($key, $value) = each($fruits)) {
    // Code using $key and $value
  }

  // while Loop with current and next
  while ($value = current($fruits)) {
    // Code using $value
    next($array);
  }

  // array_walk Function
  array_walk($fruits, function ($value, $key) {
    // Code using $key and $value
  });

  // array_map Function
  $newArray = array_map(function ($value) {
    // Transform $value
    return $newValue;
  }, $fruits);

  // Iterators
  // For more advanced iteration, particularly with objects that implement
  // the Iterator or IteratorAggregate interfaces, PHP's SPL (Standard PHP Library)
  // provides iterators like ArrayIterator.
  $iterator = new ArrayIterator($array);
  foreach ($iterator as $key => $value) {
    // Code using $key and $value
  }


  // objects
  // foreach Loop
  foreach ($object as $property => $value) {
    // Code using $property and $value
  }

  // Using Object Iterators.
  // For more complex objects, especially those that implement the Iterator
  // or IteratorAggregate interfaces from the Standard PHP Library (SPL),
  // you can use a foreach loop to iterate over elements just like an array.
  class MyIterator implements Iterator {
    // Implementation of Iterator methods
  }

  $myIterator = new MyIterator();
  foreach ($myIterator as $key => $value) {
    // Code using $key and $value
  }

  // Using get_object_vars().
  // This function returns an associative array of defined object accessible non-static properties for the specified object.
  foreach (get_object_vars($object) as $property => $value) {
    // Code using $property and $value
  }

  // Using Reflection
  //The Reflection classes in PHP are used to introspect classes, interfaces, functions, methods, and extensions. They can also be used to analyze an object's properties and methods.
  // Example with ReflectionObject:
  $reflection = new ReflectionObject($object);
  foreach ($reflection->getProperties() as $property) {
    echo $property->getName() . "\n";
    // Additional code to work with the property
  }

  // Using array_walk or array_map on Object Properties
  //If you convert an object's properties to an array, you can use array_walk or array_map.
  array_walk(get_object_vars($object), function ($value, $property) {
    // Code using $property and $value
  });

  // Caveats and Considerations for looping over objects
  //Visibility: When using foreach or get_object_vars(), be aware that they will only access the public properties of the object. Protected and private properties are not accessible through these methods.
  //Complex Objects: For objects with more complex structures, such as those that implement specific interfaces for iteration, using the SPL iterators or Reflection classes may be more appropriate.
  //Performance: Be mindful of performance implications when using reflection or converting object properties to arrays, especially with large or complex objects.
  //Each method serves different use cases, and the choice largely depends on the specific requirements of your task and the structure of the objects you are working with.


?>

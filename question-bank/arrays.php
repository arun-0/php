<?php


  $fruits = array("Apple", "Banana", "Orange");
  // Array Functions. count, first/last element
  echo "Count: " . count($fruits) . "<br>";
  echo "First Element: " . reset($fruits) . "<br>";
  echo "Last Element: " . end($fruits) . "<br>";
  print_r(array_reverse($fruits)) . "<br>". "<br>";


  // Extra

  // the [] operator is primarily used for two purposes:
  //
  //Array Access: When used with existing arrays, it's known as the array access operator. It allows you to access or set the value at a specific index in an array. For instance, $array[0] accesses the first element of the array $array.
  //
  //Array Append: When used on the right-hand side of an assignment without specifying an index, it's known as the array append operator. It allows you to add a new element to the end of an array. For example, $array[] = $newValue adds $newValue to the end of $array.

  // Using the array() Construct:
  $array1 = array(1, 2, 3, 4, 5);

  // Using Short Array Syntax (since PHP 5.4):
  $array2 = [1, 2, 3, 4, 5];

  // Initializing an Empty Array and Adding Values:
  $array3 = array();
  $array3[] = 1;
  $array3[] = 2;
  $array3[] = 3;
  // Or using short syntax:
  $array4 = [];
  $array4[] = 1;
  $array4[] = 2;
  $array4[] = 3;


  // Associative Arrays

  // Using the array() Construct:
  $assocArray1 = array("a" => "Apple", "b" => "Banana", "c" => "Cherry");

  // Using Short Array Syntax (since PHP 5.4):
  $assocArray2 = ["a" => "Apple", "b" => "Banana", "c" => "Cherry"];

  // Initializing an Empty Array and Adding Key-Value Pairs:
  $assocArray3 = array();
  $assocArray3["a"] = "Apple";
  $assocArray3["b"] = "Banana";
  $assocArray3["c"] = "Cherry";

  // Or using short syntax:
  $assocArray4 = [];
  $assocArray4["a"] = "Apple";
  $assocArray4["b"] = "Banana";
  $assocArray4["c"] = "Cherry";


  // Mixed Indexed and Associative Arrays
  // PHP also allows mixed arrays, which contain both numerical and string keys.

  $mixedArray1 = [1, "a", "b", "dfg", 7];

  $mixedAssocArray1 = array(
    "fruit1" => "Apple",
    1 => "Banana",
    "fruit2" => "Cherry",
    2 => "Date"
  );

  // Or using short syntax:
  $mixedAssocArray2 = [
    "fruit1" => "Apple",
    1 => "Banana",
    "fruit2" => "Cherry",
    2 => "Date"
  ];

  // In PHP arrays, keys are unique and the values they map to can be of any type.
  //The flexibility of arrays in PHP makes them a fundamental and powerful
  // feature of the language.

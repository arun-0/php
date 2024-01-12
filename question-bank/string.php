<?php

  $string = "Hello, World!";

  // String Functions. strlen, strtoupper, strtolower, substr, strpos
  echo "Length: " . strlen($string) . "<br>";
  echo "Uppercase: " . strtoupper($string) . "<br>";
  echo "Lowercase: " . strtolower($string) . "<br>";
  echo "Substring: " . substr($string, 0, 5) . "<br>";
  echo "Position of 'World': " . strpos($string, "World") . "<br>";


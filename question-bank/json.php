<?php

  // Encoding data to JSON
  $data = array("name" => "John", "age" => 30, "city" => "New York");
  $jsonString = json_encode($data);
  echo "Encoded JSON: $jsonString<br>";

  // Decoding JSON
  $decodedData = json_decode($jsonString, true);
  echo "Decoded Data: ";
  print_r($decodedData);
?>

<?php

  //1
  //12
  //123
  //1234

  echo "<br>";
  for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j;
    }
    echo "<br>";
  }

  //1
  //22
  //333
  //4444

  echo "<br>";
  for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $i;
    }
    echo "<br>";
  }

  //1234
  //123
  //12
  //1

  echo "<br>";
  for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j;
    }
    echo "<br>";
  }

  //4444
  //333
  //22
  //1

  echo "<br>";
  for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo $i;
    }
    echo "<br>";
  }

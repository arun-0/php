<?php

  // Global variable
  $globalVar = "I am global";

  function exampleFunction($input1, $input2)
  {
    // Local variable
    $localVar = "I am local";

    // Static variable
    static $staticVar1 = "I am static.";
    static $staticVar2;

    $staticVar1 = $staticVar1 . " " . $input1;
    $staticVar2 = $staticVar2 + $input2;

    echo "======== visibility from the function =========<br><br>";
    echo "Global Variable: $GLOBALS[globalVar]<br>";
    echo "Local Variable: $localVar<br>";
    echo "Static Variable: $staticVar1<br><br>";
    echo "Static Variable: $staticVar2<br><br>";
  }

  echo "======== visibility from outside the function ==========<br><br>";
  echo "Global Variable: $GLOBALS[globalVar]<br><br><br>";
  //echo "Local Variable: $localVar<br>";
  //echo "Static Variable: $staticVar<br>";

  exampleFunction("A", 10);
  exampleFunction("A", 20);
  exampleFunction("A", "20");
  exampleFunction("A", "abc");


  echo "======== visibility from outside the function ==========<br><br>";
  echo "Global Variable: $GLOBALS[globalVar]<br><br><br>";
  //echo "Local Variable: $localVar<br>";
  //echo "Static Variable: $staticVar<br>";


?>

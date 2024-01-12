<?php
  // Start a session
  session_start();

  // Set session variables
  $_SESSION["username"] = "John";

  // Access session variables
  echo "Welcome " . $_SESSION["username"];
?>

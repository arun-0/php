<?php
  // Set a cookie
  setcookie("user", "John Doe", time() + 3600, "/");

  // Access the cookie
  if (isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"] . "!";
  } else {
    echo "Cookie not set!";
  }
?>

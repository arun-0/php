<?php

  $to = "arun.parihar@gmail.com";
  $subject = "Test Mail";
  $message = "This is a test email message.";

  // Additional headers
  $headers = "From: sender@example.com";

  // Send email
  $var = mail($to, $subject, $message, $headers);
  echo "Email sent successfully!";
?>

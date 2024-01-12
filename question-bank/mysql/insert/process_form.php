<!-- process_form.php -->
<?php
  // Connect to MySQL
  $conn = mysqli_connect("localhost", "root", "root", "paruluniversity");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Process form data
  $name = $_POST['name'];
  $enrollment = $_POST['enrollment'];
  $gender = $_POST['gender'];
  $mobile = $_POST['mobile'];
  $dob = $_POST['dob'];

  // Insert data into MySQL
  $sql = "INSERT INTO mca (stud_name, stud_enroll, stud_gender, stud_mob, stud_dob) VALUES ('$name', '$enrollment', '$gender', '$mobile', '$dob')";
  mysqli_query($conn, $sql);

  // Close connection
  mysqli_close($conn);

  // Redirect back to the form
  header("Location: form_records.php");
  exit();
?>

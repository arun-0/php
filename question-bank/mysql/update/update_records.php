<!-- update_records.php -->
<?php
  // Connect to MySQL
  $conn = mysqli_connect("localhost", "root", "root", "paruluniversity");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Process form data for update
  $edit_id = $_POST['edit_id'];
  $name = $_POST['name'];
  $enrollment = $_POST['enrollment'];
  $gender = $_POST['gender'];
  $mobile = $_POST['mobile'];
  $dob = $_POST['dob'];

  // Update data in MySQL
  $sql = "UPDATE mca SET stud_name='$name', stud_enroll='$enrollment', stud_gender='$gender', stud_mob='$mobile', stud_dob='$dob' WHERE stud_id=$edit_id";
  mysqli_query($conn, $sql);

  // Close connection
  mysqli_close($conn);

  // Redirect back to display_records.php or another page
  header("Location: display_records.php");
  exit();
?>

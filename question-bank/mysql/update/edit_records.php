<!-- edit_records.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Records</title>
  </head>
  <body>

    <?php
      // Connect to MySQL
      $conn = mysqli_connect("localhost", "root", "root", "paruluniversity");

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      if (isset($_GET['edit_id'])) {
        $edit_id = $_GET['edit_id'];
        $sql = "SELECT * FROM mca WHERE stud_id = $edit_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        // Display the form with data for editing
        echo "<form action='update_records.php' method='post'>";
        echo "Name: <input type='text' name='name' value='{$row['stud_name']}'><br>";
        echo "Enrollment: <input type='text' name='enrollment' value='{$row['stud_enroll']}'><br>";
        echo "Gender: <input type='text' name='gender' value='{$row['stud_gender']}'><br>";
        echo "Mobile: <input type='text' name='mobile' value='{$row['stud_mob']}'><br>";
        echo "DOB: <input type='text' name='dob' value='{$row['stud_dob']}'><br>";
        echo "<input type='hidden' name='edit_id' value='{$row['stud_id']}'>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
      }

      // Close connection
      mysqli_close($conn);
    ?>

  </body>
</html>

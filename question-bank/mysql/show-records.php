<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
  </head>
  <body>

    <?php
      // Connect to MySQL
      $conn = mysqli_connect("localhost", "root", "root", "paruluniversity");

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch data from MySQL
      $sql = "SELECT * FROM mca";
      $result = mysqli_query($conn, $sql);

      // Display data in tabular format
      echo "<table border='1'>";
      echo "
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Enrollment</th>
      <th>Gender</th>
      <th>Mobile</th>
      <th>DOB</th>
    </tr>
    ";

      while ($row = mysqli_fetch_assoc($result)) {
        echo "
    <tr>";
        echo "
      <td>{$row['stud_id']}</td>
      ";
        echo "
      <td>{$row['stud_name']}</td>
      ";
        echo "
      <td>{$row['stud_enroll']}</td>
      ";
        echo "
      <td>{$row['stud_gender']}</td>
      ";
        echo "
      <td>{$row['stud_mob']}</td>
      ";
        echo "
      <td>{$row['stud_dob']}</td>
      ";
        echo "
    </tr>
    ";
      }

      echo "</table>";

      // Close connection
      mysqli_close($conn);
    ?>

  </body>
</html>

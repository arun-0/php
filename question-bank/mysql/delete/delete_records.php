<!-- delete_records.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Records</title>
  </head>
  <body>

    <?php
      // Connect to MySQL
      $conn = mysqli_connect("localhost", "root", "root", "paruluniversity");

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];

        // Delete record from MySQL
        $sql = "DELETE FROM mca WHERE stud_id = $delete_id";
        mysqli_query($conn, $sql);

        echo "Record with ID $delete_id deleted successfully!";
      }

      // Close connection
      mysqli_close($conn);
    ?>

  </body>
</html>

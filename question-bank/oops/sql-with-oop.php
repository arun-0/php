<!--31.	Write a program to perform Mysql Database handling with oop (insert, update, select, delete).-->

<?php

  // Database class
  class Database
  {
    private $conn;

    public function __construct($host, $username, $password, $database)
    {
      $this->conn = new mysqli($host, $username, $password, $database);

      if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
      }
    }

    public function insertData($name, $enroll, $gender, $mobile, $dob)
    {
      $sql = "INSERT INTO mca (stud_name, stud_enroll, stud_gender, stud_mob, stud_dob) 
                VALUES ('$name', '$enroll', '$gender', '$mobile', '$dob')";

      return $this->conn->query($sql);
    }

    public function updateData($id, $name, $enroll, $gender, $mobile, $dob)
    {
      $sql = "UPDATE mca 
                SET stud_name='$name', stud_enroll='$enroll', stud_gender='$gender', stud_mob='$mobile', stud_dob='$dob' 
                WHERE stud_id=$id";

      return $this->conn->query($sql);
    }

    public function selectData()
    {
      $result = $this->conn->query("SELECT * FROM mca");
      $data = [];

      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }

      return $data;
    }

    public function deleteData($id)
    {
      $sql = "DELETE FROM mca WHERE stud_id = $id";

      return $this->conn->query($sql);
    }

    public function __destruct()
    {
      $this->conn->close();
    }
  }

  // Usage
  $db = new Database("localhost", "root", "root", "paruluniversity");

  // Insert data
  $db->insertData("John Doe", "EN123", "Male", "1234567890", "1990-01-01");

  // Update data
  $db->updateData(1, "Updated Name", "EN456", "Female", "9876543210", "1995-05-05");

  // Select data
  $data = $db->selectData();
  print_r($data);

  // Delete data
  $db->deleteData(2);
?>

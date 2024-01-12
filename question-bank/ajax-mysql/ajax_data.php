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

  // Convert data to JSON
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  echo json_encode($data);

  // Close connection
  mysqli_close($conn);
?>


// SQL
//create database paruluniversity;
//USE paruluniversity;
//CREATE TABLE mca (
//    stud_id INT AUTO_INCREMENT PRIMARY KEY,
//    stud_name VARCHAR(100) NOT NULL,
//    stud_enroll VARCHAR(20),
//    stud_gender VARCHAR(10),
//    stud_mob VARCHAR(15),
//    stud_dob DATE
//);
//INSERT INTO mca (stud_name, stud_enroll, stud_gender, stud_mob, stud_dob) VALUES
//('John Doe', 'ENR001', 'Male', '1234567890', '2000-01-15'),
//('Jane Smith', 'ENR002', 'Female', '2345678901', '1999-12-10'),
//('Alice Johnson', 'ENR003', 'Female', '3456789012', '2001-02-20'),
//('Bob Brown', 'ENR004', 'Male', '4567890123', '1998-07-30'),
//('Carol White', 'ENR005', 'Female', '5678901234', '2000-05-25');

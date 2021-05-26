<?php
$servername = "localhost";
$username = "root";
$password = "demoroot";
$dbname = "studentsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$check_Connection = "Connected successfully";


?> 
<style>
#gr{
    color:green;
}
</style>
<h3>Status of the connection:</h3><p id="gr"><?php echo $check_Connection?></p>


<?php

// Create database
$sql = "CREATE DATABASE studentsDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE studentsTable (
    id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    age VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table studentsTable created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

    // sql to insert data into table
$sql = "INSERT INTO studentsTable (firstname, age)
VALUES ('John', '18');";
$sql .= "INSERT INTO studentsTable (firstname, age)
VALUES ('Hasan', '18');";
$sql .= "INSERT INTO studentsTable (firstname, age)
VALUES ('Anton', '17');";
$sql .= "INSERT INTO studentsTable (firstname, age)
VALUES ('Rick', '18');";
$sql .= "INSERT INTO studentsTable (firstname, age)
VALUES ('Morty', '18');";

if ($conn->multi_query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
   

    $conn->close();


?>
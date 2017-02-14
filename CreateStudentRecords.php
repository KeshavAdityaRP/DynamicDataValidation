<?php

$servername = "localhost";
$username = "keshav";
$password = "iamcrazy1";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table email VARCHAR(50),reg_date TIMESTAMP
$sql = "CREATE TABLE student (
id INT(6) UNSIGNED PRIMARY KEY, 
year VARCHAR(15) NOT NULL,
department VARCHAR(10) NOT NULL,
name VARCHAR(15) NOT NULL,
dob date NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Student created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
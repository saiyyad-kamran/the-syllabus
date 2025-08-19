<?php
$connection = mysqli_connect('localhost', 'root', '', 'kamran');

if(!$connection){
    die("Error connection: " . mysqli_connect_error());
}

$sql = "CREATE TABLE form_login_data (
    studentId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(111) NOT NULL,
    fatherName VARCHAR(100) NOT NULL,
    year VARCHAR(200) NOT NULL,
    gender VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL,
    course VARCHAR(200) NOT NULL
)";

if(mysqli_query($connection, $sql)){
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connection);
}

mysqli_close($connection);
?>

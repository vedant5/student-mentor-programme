<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SMP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE wantstolearn(
		schno bigint(10),
		code bigint,
		count int DEFAULT 0,
		foreign key(schno) references student(schno),
		foreign key(code) references interest(code),
		primary key(schno,code)
		)" ;
if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully";
	
} else {
    echo "Error creating table: " . $conn->error;
}

	
?>
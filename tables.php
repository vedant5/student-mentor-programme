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



$sql1 = "CREATE TABLE student (
fname varchar(25) not null,
lname varchar(25) not null,
email varchar(50) not null,
mobno bigint(10) not null,
schno bigint(10) not null primary key,
pswd varchar(255) not null,
dob date,
branch varchar(100),
gender varchar(10),
city varchar(50),
state varchar(50),
country varchar(50),
nomentor int,
nomentee int
)";

$sql2 = "CREATE TABLE interest (
topic varchar(15) not null,
code bigint primary key not null
)";

$sql3 = "CREATE TABLE relation (
mentee bigint(10),
mentor bigint(10),
code bigint,
foreign key(mentee) references student(schno),
foreign key(mentor) references student(schno),
foreign key(code) references student(schno),
primary key(mentee,mentor,code)
)";

$sql4 = "CREATE TABLE knows (
schno bigint(10) not null,
code bigint not null,
score bigint(10),
foreign key(schno) references student(schno),
foreign key(code) references interest(code),
primary key(schno,code)
)";

$sql22 = "CREATE TABLE temp (
schno bigint(10),
score bigint(10) default 0,
foreign key(schno) references student(schno)
)";


if ($conn->query($sql1) === TRUE) {
    echo "Table student created successfully";
	
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "Table interest created successfully";
	
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
    echo "Table realtion created successfully";
	
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql4) === TRUE) {
    echo "Table knows created successfully";
    
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql22) === TRUE) {
    echo "Table knows created successfully";
    
} else {
    echo "Error creating table: " . $conn->error;
}

$sql5 = "INSERT INTO interest VALUES ('HTML',101)";
$sql6 = "INSERT INTO interest VALUES ('CSS',102)";
$sql7 = "INSERT INTO interest VALUES ('BOOTSTRAP',103)";
$sql8 = "INSERT INTO interest VALUES ('JQUERY',104)";
$sql9 = "INSERT INTO interest VALUES ('JAVASCRIPT',105)";
$sql10 = "INSERT INTO interest VALUES ('PHP',106)";
$sql11 = "INSERT INTO interest VALUES ('PYTHON',107)";
$sql12 = "INSERT INTO interest VALUES ('PHP',108)";
$sql13 = "INSERT INTO interest VALUES ('NODEJS',109)";
$sql14 = "INSERT INTO interest VALUES ('APACHE',110)";
$sql15 = "INSERT INTO interest VALUES ('NGINX',111)";
$sql16 = "INSERT INTO interest VALUES ('MYSQL',112)";
$sql17 = "INSERT INTO interest VALUES ('MONGODB',113)";
$sql18 = "INSERT INTO interest VALUES ('REACTJS',114)";
$sql19 = "INSERT INTO interest VALUES ('ANGULARJS',115)";
$sql20 = "INSERT INTO interest VALUES ('VUEJS',116)";
$sql21 = "INSERT INTO interest VALUES ('METEORJS',117)";


if ((($conn->query($sql5))&&($conn->query($sql6))&&($conn->query($sql7))&&($conn->query($sql8))&&($conn->query($sql9))&&($conn->query($sql10))&&($conn->query($sql11))&&($conn->query($sql12))&&($conn->query($sql13))&&($conn->query($sql14))&&($conn->query($sql15))&&($conn->query($sql16))&&($conn->query($sql17))&&($conn->query($sql18))&&($conn->query($sql19))&&($conn->query($sql20))&&($conn->query($sql21)))===TRUE) {
    echo "INTERESTS table CREATED successfully";
    
} else {
    echo "Error creating table: " . $conn->error;
}

?>
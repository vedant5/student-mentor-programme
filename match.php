<?php

//$temptable = "CREATE TABLE temp(schno int foreign key references student(schno),score int DEFAULT 0);";

for($i=0;i<n;i++)
{
    $x = arr[i];
    $query = "UPDATE temp SET score = score + 1 WHERE schno in (SELECT schno from knows where code = $x)";
    //run the query 
    if ($conn->query($query) === TRUE) {
    echo "Query run successfully";
    
} else {
    echo "Error " . $conn->error;
}
    
}

$finalquery = "SELECT * FROM student WHERE schno in (SELECT schno from score order by score desc)";


$deletetemp = "DELETE FROM temp";


$query_email = "SELECT * FROM student WHERE email = '$email'";
			

?>
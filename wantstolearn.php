

<!DOCTYPE html>
<html lang="en">
<head>
<title>Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">
<style>

</style>
</head>
<body>

<div class="header">
  <h1>Header</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<div class="topnav">
  <a href="homepage.php">Home</a>
  <a href="mentor.php">Mentor</a>
  <a href="mentee.php">Mentoree</a>
  <a href="profile2.php">Profile</a>
</div>

<div class="row">
  <div class="column side">
    <h2>Interesting Topics</h2>
    <p></p>
  </div>
  
	<div class="column middle">
		<div class="row" id="mainrow">


		</div>	
    </div>
  
  <div class="column side">
    <h2>Google adsense</h2>
    <p></p>
  </div>
</div>

<div class="footer">
  <p>Footer</p>
</div>
  
</body>

<script>
	//Result nodes.
	function showresult(sno,name,schno, matches, interest){
	var div1 = document.createElement('div');
	var div2 = document.createElement('div');
	var div3 = document.createElement('div');
	var div4 = document.createElement('div');
	var div5 = document.createElement('div');

	div1.setAttribute('class', 'resultcard');
	div1.setAttribute('id', 'result' + sno);
	div2.setAttribute('class', 'container');

	div4.setAttribute('class', 'imgclass');
	div5.setAttribute('class', 'personalinfo');

	div5.innerHTML =  "<p>" + sno + "</p>" + "<h2><b>" + name + "</b></h2>" +  "<p>" + schno + "</p>" +  "<p>Matches: " + matches +"</p>" + "<p>" + interest +"</p>" ;
	div4.innerHTML = ' <img src="img/person3.png" alt="Avatar" style="width: 100%;"> '


	document.getElementById('mainrow').appendChild(div1);
	div1.appendChild(div2);
	div2.appendChild(div3);
	div3.appendChild(div4);
	div3.appendChild(div5);
}
	

</script>

</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smp";


$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$interests = "";

if(isset($_POST['ipinterests']))
{
	
	$interests = $_POST['ipinterests'];

	//echo $interests."<br>";
	trim($interests);
	$interest_arr=explode(" ",$interests);

	$code  = array("HTML"=>"101","CSS"=>"102","BOOTSTRAP"=>"103","JQUERY"=>"104","JAVASCRIPT"=>"105" ,"PHP"=>"106","PYTHON"=>"107","RUBY"=>"108","NODEJS"=>"109","APACHE"=>"110","NGINX"=>"111","MYSQL"=>"112","MONGODB"=>"113","REACTJS"=>"114","ANGULARJS"=>"115","VUEJS"=>"116","METEORJS"=>"117");

	
	$arr = array();	

	$length=count($interest_arr);
	
	for($x=1;$x<$length;$x = $x+1)
	{

		$y = $interest_arr[$x];
		//echo "<br>a$y<br>";
		
		$z = $code[$y];
		array_push($arr,$z);
	}

	/*for($x=0;$x<count($arr);$x++)
	{
		echo $arr[$x].'<br>';
	}*/
	$schno = 0;
	session_start();
	if(isset($_SESSION['name']) && isset($_SESSION['schno']))
	{
		//echo 'Welcome '.$_SESSION['name']."<br>";
		$schno = $_SESSION['schno'];
	}	
	else 
		echo 'die';
	


	for($x=0;$x<count($arr);$x++)
	{
		$sql3 = "SELECT *  FROM wantstolearn WHERE schno = $schno AND code = $arr[$x]";
		$result = mysqli_query($conn2,$sql3);
		$no_rows = mysqli_num_rows($result);
		// $count = 0;
		// if($row = mysqli_fetch_row($result))
		// 	{
		// 		$count = $row[2];
		// 	}
		if($no_rows == 0)
		{
			$sql4 = "INSERT INTO wantstolearn(schno,code,count) VALUES($schno,$arr[$x],1)" ;
			if ($conn2->query($sql4) === TRUE) {
			    //echo "Inserted into wantstolearn successfully"; 
			} else {
			    echo "Error: ". "<br>" . $conn2->error;
			}
		}
		else
		{
			// $count = $count + 1;
			$updatecount = "UPDATE wantstolearn SET count = count + 1 WHERE schno = $schno AND code = $arr[$x]" ;
			if (mysqli_query($conn2,$updatecount) === TRUE) {
			    //echo "Updated wantstolearn successfully";
			} else {
			    echo "Error: ". "<br>" . $conn2->error;
			}
		}
	}




	$temp = "SELECT schno FROM student";
	$total = mysqli_query($conn2,$temp);
	//$total_rows = mysqli_num_rows($total);


	while($row = mysqli_fetch_row($total))
	{
		//echo "$row[0]<br>";
		$temptable="INSERT INTO temp(schno) VALUES($row[0])";
		if (mysqli_query($conn2,$temptable) === TRUE) {
			    //echo "Inserted schno in temp successfully";
			} else {
			    echo "Error: ". "<br>" . $conn2->error;
			}
	}


	for($i=0;$i<count($arr);$i++)
	{
		$x = $arr[$i];
		$query = "UPDATE temp SET score = score + 1 WHERE schno in (SELECT schno from knows where code = $x)";
		//run the query 
		if (mysqli_query($conn2,$query) === TRUE) {
		//echo "Query run successfully";

		} else {
		echo "Error " ;
		}
		//echo "$x<br>";

	}

	$sort = "SELECT * FROM temp ORDER BY score DESC" ; 
	$ressort = mysqli_query($conn2,$sort);
	$no_sort = mysqli_num_rows($ressort);


		if ($no_sort>0) 
		{
			$i = 0;
			while($row = mysqli_fetch_row($ressort))
			{
				//echo "Table sorted successfully<br>";
				$finalquery = "SELECT * FROM student WHERE schno = $row[0]";
				$resfinal = mysqli_query($conn2,$finalquery);
				
				while($res = mysqli_fetch_row($resfinal))
				{
					//print_r($row);
					if($res[4] === $schno)
						continue;
					//echo "$res[0] $res[1] matches = $row[1]<br>";
					if($row[1]==0)
						continue;

					$interestquery = "SELECT topic FROM interest WHERE code in (SELECT code FROM knows WHERE schno = $res[4])" ;
					$runinterestquery = mysqli_query($conn2, $interestquery);
					$strinterests = "";
					while($x = mysqli_fetch_row($runinterestquery))
					{
						$strinterests .= " $x[0]";
					}
					$name = $res[0]." $res[1]";
					$i = $i+1;
					//echo "$i<br>";
					echo "<script> showresult($i, '$name', $res[4], $row[1], '$strinterests' ); </script>" ;
					
				}
			}
		}
	 else 
	{
		echo "Error " . $conn2->error;
	}
		


	// if ($no_sort>0) 
	// {
	// 	while($row = mysqli_fetch_row($ressort))
	// 	{
	// 		//echo "Table sorted successfully<br>";
	// 		$finalquery = "SELECT * FROM student WHERE schno = $row[0]";
	// 		$resfinal = mysqli_query($conn2,$finalquery);
	// 		while($res = mysqli_fetch_row($resfinal))
	// 		{
	// 			//print_r($row);
	// 			if($res[4] === $schno)
	// 				continue;

	// 			echo "$res[0] $res[1] matches = $row[1]<br>";
	// 		}
	// 	}
	// }
	//  else 
	// {
	// 	echo "Error " . $conn2->error;
	// }

	// // $finalquery = "SELECT * FROM student WHERE schno in (SELECT schno FROM temp)";
	// // $resfinal = mysqli_query($conn2,$finalquery);
	// // //$no_rows = mysqli_num_rows($result);
	// // //$row = mysqli_fetch_row($result);
	// // while($row = mysqli_fetch_row($resfinal))
	// // {
	// // 	//print_r($row);
	// // 	echo "$row[0] $row[1] <br>";
	// // }

	$deletetemp = "DELETE FROM temp";
	if(mysqli_query($conn2,$deletetemp))
	{
		//echo  "deleted <br>";

	}	
	else 
		echo "error in deleting<br>";
	//$updatetemp = "UPDATE temp SET score = 0";

	//$query_email = "SELECT * FROM student WHERE email = '$email'";
		



	
}
	
else 
	echo "not set";

?> 



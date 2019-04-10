
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
$fname = $lname = $contact = $gender = $country = $state = $city = $branch = $interests = "";
// $x=$_POST["firstname"];
// $y=$_POST["lastname"];
// $z=$_POST["email"];
if(isset($_POST['fname']) &&isset(($_POST['lname'])) && isset($_POST['contact']) && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['branch']) && isset($_POST['ipinterests']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$country=$_POST['country'];
	$state = $_POST['state'];
	$city=$_POST['city'];
	$branch=$_POST['branch'];
	$interests = $_POST['ipinterests'];

	echo $interests."<br>";
	trim($interests);
	$interest_arr=explode(" ",$interests);

	$code  = array("HTML"=>"101","CSS"=>"102","BOOTSTRAP"=>"103","JQUERY"=>"104","JAVASCRIPT"=>"105" ,"PHP"=>"106","PYTHON"=>"107","RUBY"=>"108","NODEJS"=>"109","APACHE"=>"110","NGINX"=>"111","MYSQL"=>"112","MONGODB"=>"113","REACTJS"=>"114","ANGULARJS"=>"115","VUEJS"=>"116","METEORJS"=>"117");

	
	$arr = array();
	//echo $name." ".$contact." ".$gender." ".$city." ".$branch." <br>";

	

	$length=count($interest_arr);
	
	for($x=1;$x<$length;$x++)
	{

		$y = $interest_arr[$x];
		//echo "a$y<br>";
		$z = $code[$y];
		array_push($arr,$z);
	}

	for($x=0;$x<count($arr);$x++)
	{
		echo $arr[$x].'<br>';
	}
	$schno = 0;
	session_start();
	if(isset($_SESSION['name']) && isset($_SESSION['schno']))
	{
		echo 'Welcome '.$_SESSION['name']."<br>";
		$schno = $_SESSION['schno'];
	}	
	else 
		echo 'die';
	


	//echo "$schno<br>";
	$sql2 = "UPDATE student
			SET  gender = '$gender', country = '$country', state = '$state', city = '$city', branch = '$branch',mobno = $contact WHERE schno = $schno";
// ,
//

	if ($conn2->query($sql2) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: ". "<br>" . $conn2->error;
	}

	for($x=0;$x<count($arr);$x++)
	{
		$sql3 = "SELECT *  FROM knows WHERE schno = $schno AND code = $arr[$x]";
		$result = mysqli_query($conn2,$sql3);
		$no_rows = mysqli_num_rows($result);
		if($no_rows == 0)
		{
			$sql4 = "INSERT INTO knows(schno,code) VALUES($schno,$arr[$x])" ;
			if ($conn2->query($sql4) === TRUE) {
			    echo "Inserted into knows successfully";
			} else {
			    echo "Error: ". "<br>" . $conn2->error;
			}
		}
		else 
		{
			echo "course already selected"."<br>";
		}
	}
	
}
else 
	echo "not set";


?> 
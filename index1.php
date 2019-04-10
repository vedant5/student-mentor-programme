<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style1.css">

<style>

</style>
</head>
<div class="header">
	<br>
  <span style="font-size: 50px; letter-spacing: .3em; font-weight: 700;">STUDENT <span style="color:#ff944d;">MENTOR</span></span>
  <p style="font-weight: 400;">Welcome to the first website thats finds the best mentor for you from your same institute</p>
</div>


<div class="topnav">
<!--   <a href="home.html">Home</a> -->
  <a href="about.html">About</a>
  <a href="contact.html">Contact</a>

	<div class="login-container" style="float: right;">
	    <form action="logintest.php" method = "post" style="float: right;">
	     	<input type="submit" value = "Login" name = "login" style="float: right; width: 100px">
			<input type="password" placeholder="Password" name="pswd" id = "pswd" style="float: right; width: 30%">
	     	<input type="text" placeholder="email-id" name="email" id = "email" style="float: right; width: 30%">
	    </form>
	</div>
</div>

 	
	<div class="bgimg">
		<div class="row">

			<div class="column left">
		
				<div class="row">

					<div class="card" style="width: 40%">
						<h3 style="font-weight: 800; font-size: 30px">What do we do??</h3>
						<p style="font-weight: 600;">In present scenario many students face the difficulty in pursuing their interests along with their college curriculum. The student mentorship programme thus allows them to choose their interests and mentors (students from same institute).</p>
					</div>


					<div class="card" style="width: 55%">
						<h3 style="font-weight: 800; font-size: 30px">Functionality</h3>
						<div style="font-weight: 600;" >
						<p>Users should be able to create accounts and register through their already existing accounts(by their scholar number).</p>
						<p>The user can select topics which he wants to learn and wants guidance from a given list of topics.</p>
						<p>A mentor will be assigned to the student based on his selected topics.</p>
						<p>The mentor assigned will be expert in those topics.</p>
						<p>The algorithm used for matching student with mentor will ensure that a genuine relevant mentor is matched.</p>
						<p>Once the mentor is matched the mentorship programme will begin for a specific period of time.</p>
						<p>Both mentor and student would be able to anonymously able to rate each other</p>
					</div>
						</div>
						
				</div>
			</div>

			<div class="column right">
				<div class="container">
				  <h2 align="center" style="color: #333; font-weight: 800">Sign up Form</h2>
				  	<form form name="contactform" action="signupdetails.php" method = "post">
						<div>
						    <input type="text" id="fname" name="fname" placeholder="Firstname"  required style="width: 48%; float: left;">
						    <input type="text" id="lname" name="lname" placeholder="Lastname"  required style="width: 48%; float: left;">
						</div>
						<input type="text" id="schno" name="schno"  placeholder="Scholar Number" ><br>
						<input type="text" id="contact" name="contact"  placeholder="Mobile Number" required ><br> <br>
					    <input type="text" id="email" name="email" placeholder="Email ID" required >
					  	<input type="password" placeholder="Enter Password" name="pswd" required>
					  	<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

					    <center><input type="submit" value="Submit"></center>
				  	</form>
				</div>
			</div >
		</div>
	</div>
	

<div class="footer" style="  background: linear-gradient(to bottom, #111 , #333 );   color: #ff944d;">
  <p>Made with  &hearts;  by Atik, Mayank, Vedant and Rishabh</p>
</div>


</body>
</html>

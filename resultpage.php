<!DOCTYPE html>
<html lang="en">
<head>
<title>Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<style>

</style>
</head>
<body>

<div class="header">
	<br>
  <span style="font-size: 50px; letter-spacing: .3em; font-weight: 700;">STUDENT <span style="color:#ff944d;">MENTOR</span></span>
  <p style="font-weight: 400;">Welcome to the first website thats finds the best mentor for you from your same institute</p>
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

		 	<!-- <div class="resultcard">
			  <div class="container">
			  	<div>
			  		<div style="width: 20%; float: left;">
			  			<img src="img/person3.png" alt="Avatar" style="width: 100%;">
			  		</div>
			  		<div style="width: 76%; float: left; margin:2%;">
			  			<h4><b>NAME</b></h4> 
			    		<p>Description of Mentor</p> 
			  		</div>
			  	</div>
			  </div>
			</div> -->

		</div>	
    </div>
  
  <div class="column side">
    <h2></h2>
    <p></p>
  </div>
</div>

<div class="footer" style="  background: linear-gradient(to bottom, #111 , #333 );   color: #ff944d;">
  <p>Made with  &hearts;  by Atik, Mayank, Vedant and Rishabh</p>
</div>
  
</body>

<script>
	//Result nodes.
	function showresult(sno,name,schno,interest){
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

	div5.innerHTML =  "<p>" + sno + "</p>" + "<h2><b>" + name + "</b></h2>" +  "<p>" + schno + "</p>" +  "<p>" + interest +"</p>" ;
	div4.innerHTML = ' <img src="img/person3.png" alt="Avatar" style="width: 100%;"> '


	document.getElementById('mainrow').appendChild(div1);
	div1.appendChild(div2);
	div2.appendChild(div3);
	div3.appendChild(div4);
	div3.appendChild(div5);
}
	

</script>

</html>

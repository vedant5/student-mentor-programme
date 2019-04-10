<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="profile.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
<style>

</style>
</head>
<body>

<div class="header" style="">
	<br>
  <span style="font-size: 50px; letter-spacing: .3em; font-weight: 700;">STUDENT <span style="color:#ff944d;">MENTOR</span></span>
</div>

<div class="topnav">
  <a href="homepage.php">Home</a>
  <a href="mentor.php">Mentor</a>
  <a href="mentee.php">Mentoree</a>
  <a href="profile2.php" style="float: right;">Profile</a>
  <a href="index.php" style="float: right;">Logout</a>
</div>

<div class="bgimg2">
	<div class="row">
		
	<!-- <div class="column side">
	    <h2>Class Notes</h2>
	    <div class="card">
	    	<div class="container-card">
	   			<h4>DBMS</h4>
	   			<a href="files/DBMS-overview.txt">Overview.</a><br>
	   			<a href="files/DBMS-acrh.txt">Architechture.</a><br>
	   			<a href="files/DBMS-datamodels.txt">Data Models & Schemas.</a><br>
	   			<a href="files/DBMS-ermodel.txt">ER-Model.</a><br>
	   			<a href="files/DBMS-normalisation.txt">Normalisation.</a><br>
	    	</div>
	    </div>
	    <div class="card">
	    	<div class="container-card">
	   			<h4>Data Structures</h4>
	   			<a>Array</a><br>
	   			<a>Linked List</a><br>
	   			<a>Stacks.</a><br>
	   			<a>Queues.</a><br>
	   			<a>Matrix.</a><br>
	   			<a>Graphs.</a><br>
	   			<a>Trees.</a><br>
	   			<a>ADT.</a><br>
	    	</div>
	    </div>
	</div> -->
  
	<div class="column middle" style="width: 100%">
		<!-- <div class="row"> -->
			<!-- <div class="card" >
				<div class="container-card">
				    <h4><b>Do you Know??</b></h4> 
				    <p>Geeks ki link</p> 
				    <p>Tutorial Point ki link</p>
				    <p>W3schools ki link</p>
				    <p>Blah Blah Blah ki link</p>
				</div>
			</div> -->

			<div style="align-content: center;">
				<br><br><br><br><br><br><br><br><br>

				<h2 style=" text-align: center;  color: white; font-size: 40px;">Hello <?php session_start();
																						if(isset($_SESSION['name']))
																						{
																							echo $_SESSION['name'];
																				
																						}	
																						else 
																							echo 'die'; ?>, Want to learn something interesing??</h2>
				<center><button id="myBtn">Find Your Mentor</button></center>

					<div class="card">
							<div class="container-card">
								<!-- The Modal -->
								<center>
									<div id="myModal" class="modal" style="align-content: center;">
									  <!-- Modal content -->
									<center>
										<div class="modal-content" >
										    <div class="modal-header">
										      <span class="close">&times;</span>
										      <h2>CLICK ON TOPICS WHICH YOU WANT TO LEARN</h2>
										    </div>
										    	<div class="modal-body" align="center">
										    		<div class="container" align="left">
													  	<form form name="contactform" action="wantstolearn.php" method="POST" >
														    <div>
															   <div id="display">
															     
															   	</div>
													    		<input type = "hidden" id = "ipinterests" name = "ipinterests" />
													    
															      <ul id="myUL">
															      <li><span class="caret">Interests</span>
															        <ul class="nested">
															          <li>Compititive Coding</li>
															          <li>App Developement</li>
															          <li><span class="caret">Web Developement</span>
															            <ul class="nested">
															              <li><span class="caret">Front-end</span>
															                  <ul class="nested">
															                    <li class="node" onClick="addnode(this)"> HTML</li>
															                    <li class="node" onClick="addnode(this)"> CSS</li>
															                    <li class="node" onClick="addnode(this)"> BOOTSTRAP</li>
															                    <li class="node" onClick="addnode(this)"> JQUERY</li>
															                    <li class="node" onClick="addnode(this)"> JAVASCRIPT</li>
															                  </ul>
															                  </li>
															              
															              <li><span class="caret">Back-end</span>
															              <ul class="nested">
															                  <li class="node" onClick="addnode(this)"> PHP</li>
															                  <li class="node" onClick="addnode(this)"> PYTHON</li>
															                  <li class="node" onClick="addnode(this)"> RUBY</li>
															                  <li class="node" onClick="addnode(this)"> NODEJS</li>
															                </ul>
															              </li>
															              
															              <li><span class="caret">Server</span>
															              <ul class="nested">
															                  <li class="node" onClick="addnode(this)"> APACHE</li>
															                  <li class="node" onClick="addnode(this)"> NGINX</li>                
															                </ul>
															              </li>
															              
															              
															              <li><span class="caret">Database</span>
															              <ul class="nested">
															                  <li class="node" onClick="addnode(this)"> MYSQL</li>
															                  <li class="node" onClick="addnode(this)"> MONGODB</li>                
															                </ul>
															              </li>
															              
															              
															              <li><span class="caret">Frameworks</span>
															              <ul class="nested">
															                  <li class="node" onClick="addnode(this)"> REACTJS</li>
															                  <li class="node" onClick="addnode(this)"> ANGULARJS</li>
															                  <li class="node" onClick="addnode(this)"> VUEJS</li> 
															                  <li class="node" onClick="addnode(this)"> METEORJS</li>  
															               </ul>
															              </li>    
															              </li>
															            </ul>
															          </li>
															        </ul>
															      </li>
															    </ul>
															</div>
												    		<center><input type="submit" value="Submit" name = "submit"></center>
												  		</form>
													</div>
										   		</div>
										    </div>
										</div>
									</center>
									
								</center>
								
							</div>
					</div> 
			</div>
	</div>
	</div>
	<br><br><br><br><br><br><br><br><br>
</div>

<div class="footer" style="  background: linear-gradient(to bottom, #111 , #333 );   color: #ff944d;">
  <p>Made with  &hearts;  by Atik, Mayank, Vedant and Rishabh</p>
</div>
  
</body>
<script type="text/javascript" src="wantstolearn.js"></script>
<script>
	// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>


</html>

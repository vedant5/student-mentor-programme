<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="profile.css">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">

<script type="text/javascript">
      function Validation()
			{
					var a = document.contactform.contact.value;
					if(a.length!=10)
					{
					alert("Enter a valid Mobile Number");
					document.contactform.contact.select();
					return false;
					}
          if(isNaN(a))
					{
					alert("Enter a valid Mobile Number");
					document.form.phone.focus();
					return false;
					}
          
          
           var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			        var z=document.contactform.email.value;
			        if (reg.test(z)==false) 
			        {
			            alert('Invalid Email Address');
			            document.contactform.email.focus();
			            return false;
			        }
              
              
					return true;
			}

</script>
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

<div class="bgimg2" style="background-image: url('img/profile2.jpg');">
  <div class="row" align="center">
<!--   <div class="column side">
    <h2>Interesting Topics</h2>
    <p></p>
  </div> -->
  
  <div class="column middle" style="width: 100%;">
    <div class="row">
      <div class="container" align="left">
        <h2 align="center">Edit Profile</h2>
        <form form name="contactform" action="profile.php" method="post" onsubmit="return Validation()" autocomplete="off">
          <div>
            <input type="text" id="fname" name="fname" placeholder="First Name" required style="width: 49%;">
            <input type="text" id="lname" name="lname" placeholder="Last Name" required style="width: 49%;">
          </div>
          <h3> Sch No.</h3>
          <h3> email id</h3>
          <input type="text" id="contact" name="contact" placeholder="Contact (preferably Whatsapp)" required><br>
          <span><input type="radio" name="gender" value="male" checked> Male</span>
          <span><input type="radio" name="gender" value="female"> Female</span><br><br>
          
          <div>
            <span style="font-size: 20px; font-weight: bold;">DOB</span><br>
            <input type="date" name="dob" style="width:33%;" placeholder="Enter DOB">
          </div>
          

          <div>
            <div class="autocomplete" style="width:33%;">
              <input id="country" type="text" name="country" placeholder="Country">
            </div>
            <div class="autocomplete" style="width:33%;">
              <input id="states" type="text" name="state" placeholder="States">
            </div>
             
            <input type="text" id="city" name="city" placeholder="City" required style="width: 32%;"> 
          </div>

          <div class="custom-select" style="width: 40%">
            <label for="branch">Branch</label>
            <select id="branch" name="branch">
              <option value="cse">CSE</option>
              <option value="elec">ELECTRONIC/EE</option>
              <option value="civil">CIVIL</option>
              <option value="mech">MECHANICAL</option>
              <option value="chem">CHEMICAL</option>
            </select>
          </div>
          <br><br>

        <div>
          <div id="display"></div>
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
        </div>
        <center><input type="submit" value="Submit" name = "submit"></center>
        </form>
      </div>
    </div>
  </div>
  
<!--     <div class="column side">
      <h2>Google adsense</h2>
      <img src="googlead.jpg" width="100%" height="500px">
    </div> -->
</div>
</div>

<div class="footer" style="  background: linear-gradient(to bottom, #111 , #333 );   color: #ff944d;">
  <p>Made with  &hearts;  by Atik, Mayank, Vedant and Rishabh</p>
</div>
  
</body>

<script type="text/javascript" src="profile.js"></script>
<script type="text/javascript" src = "autocompleteprofile.js"></script>
</html>

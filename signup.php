<!DOCTYPE html>
<html>
<head>
<title>CSE Department</title>
<link rel="stylesheet" type="text/css" href="header_style.css">
</head>
<style>
.header{
	background-color: #154360 ;
	height:80px;
}
.header p{
	color:white;
}
body {font-family: Arial, Helvetica, sans-serif;
}
form {border: 3px solid #f1f1f1;
margin-left:330px;
margin-right:280px;
margin-top:70px;
width:885px;
height:555px;
}

input[type=text], input[type=password] {
	
  width: 35%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #1A5276 ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-top:10px;
}

button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;

  padding: 10px 18px;
  margin-left:-10px;
  margin-top:1px;
  background-color: #007399;
}

.imgcontainer {
  text-align: center;
  margin: -75px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 25%;
}

.container {
  padding: 15px;
}

span.psw {
  float: right;
  padding-top: 15px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  
  .cancelbtn {
     width: 30%;
  }
}
</style>
<body>
<div class="header">
 <img style="max-width:80px; margin-left:270px;margin-top:3px;margin-bottom:-5px; align:right"
                              src="logo.png"/>

<p style="font-size:25px;margin-left:355px;margin-top:-65px"><b>NATIONAL INSTITUTE OF TECHNOLOGY ANDHRA PRADESH</b></p>   
      <p style="font-size:18px;margin-left:355px;margin-top:-20px">Department of Computer Science & Engineering</p>
	  
  </div>
  
  <form action="/action_page.php" method="post">
  

  <div class="container">
  <h2 style="margin-left:335px">Sign Up Page</h2>
    <label for="uname"><b>Name</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Username" name="uname" required>
	&nbsp;
	&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
    <label for="uname"><b>Password</b></label>&nbsp;&nbsp;
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br>
	<label for="uname"><b>Email</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Username" name="uname" required>
	&nbsp;&nbsp;
	<label for="uname"><b>Confirm password</b></label>&nbsp;&nbsp;
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br>
	<label for="uname"><b>Address</b></label>&nbsp;
    <input type="text" placeholder="Enter Username" name="uname" required>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label for="uname"><b>Contact no</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br>
	
	<label for="uname"><b>Gender</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="age1" name="age" value="30">
  <label for="age1">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="age2" name="age" value="60">
  <label for="age2">Female</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label for="uname"><b>Gender</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="age1" name="age" value="30">
  <label for="age1">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="age2" name="age" value="60">
  <label for="age2">Female</label><br>  <br>
  <h3>Security questions :</h3>
  <label for="uname"><b>Nickname</b></label>&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Username" name="uname" required>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label for="uname"><b>School name</b></label>&nbsp;&nbsp;
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br>
	<div class="radio" style="margin-top:20px">
	<label for="uname" ><b>Do you have any pet</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="age1" name="age" value="30">
  <label for="age1">Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="age2" name="age" value="60">
  <label for="age2">No</label>
  </div>
  <br>
    <button type="submit">Sign Up</button>
	<br>
	
  </div>

    
</form>
</body>
</html>
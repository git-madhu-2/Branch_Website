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
margin-left:580px;
margin-right:580px;
margin-top:100px;
height:350px;
width:500px;
}

input[type=text], input[type=password] {
	
  width: 100%;
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
  width: 40%;
  border-radius: 50%;
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
   <h2 style="margin-left:115px">Reset your password</h2>
   <p style="margin-left:45px">Hiii , Please enter your password 2* below to reset</p>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
		<label for="psw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
    <button type="submit">Reset password</button>
	<br>
	
  
  </div>

    
</form>
</body>
</html>
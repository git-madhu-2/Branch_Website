<?php
include("account page.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  
}

 table, th, td { 
            border:0.1px solid black; 
            border-collapse: collapse; 
        } 
td, th {
 
  text-align: left;
  padding: 10px;
}
</style>
</head>
<body>

<h2 style="margin-left:725px">Assignments</h2>
<p style="margin-left:575px"><b>NOTE : </b>File shld be uploaded with name of the subject</p>
<table style="width:40%; margin-left:525px">
  <tr>
    <th>Year</th>
	<th>View</th>
    <th>download</th> 
   <th>upload</th> 
  </tr>
  <tr>
    <td>|</td>
	<td><a href="account page.php">View</a></td>
    <td><a href="account page.php">download</a></td>
    <td><input type="file" id="myFile" name="filename">
  <input type="submit"></td>
  </tr>
  <tr>
    <td>||</td>
	<td><a href="account page.php">View</a></td>
    
    <td><a href="account page.php">download</a></td>
    <td><input type="file" id="myFile" name="filename">
  <input type="submit"></td>
  </tr>
  <tr>
    <td>|||</td>
	<td><a href="account page.php">View</a></td>
    
    <td><a href="account page.php">download</a></td>
    <td><input type="file" id="myFile" name="filename">
  <input type="submit"></td>
  </tr>
 <tr>
    <td>|V</td>
	<td><a href="account page.php">View</a></td>
    
    <td><a href="account page.php">download</a></td>
    <td><input type="file" id="myFile" name="filename">
  <input type="submit"></td>
  </tr>
</table>


</body>
</html>

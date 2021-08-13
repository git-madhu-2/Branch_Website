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

<h2 style="margin-left:725px">Timetables</h2>

<table style="width:40%; margin-left:525px">
  <tr>
    <th>Year</th>
    <th>download</th> 
   <th>upload</th> 
  </tr>
  <tr>
    <td>|</td>
    <td><a href="account page.php">download</a></td>
    <td><input type="file" id="myFile" name="filename">
  <input type="submit"></td>
  </tr>
  <tr>
    <td>||</td>
    <td><a href="B.Tech. CSE II Year I Semester Time table AY 2020-2021.pdf">download</a></td>
    <td><input type="file" id="myFile" name="filename">
  <input type="submit"></td>
  </tr>
  <tr>
    <td>|||</td>
    <td><a href="B.Tech. CSE III Year I Semester Time table AY 2020-2021.pdf">download</a></td>
    <td><input type="file" id="myFile" name="filename">
  <input type="submit"></td>
  </tr>
 <tr>
    <td>|V</td>
    <td><a href="account page.php">download</a></td>
    <td><input type="file" id="myFile" name="filename">
  <input type="submit"></td>
  </tr>
</table>


</body>
</html>

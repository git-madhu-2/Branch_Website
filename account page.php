<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #154360;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #154360;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

</style>
</head>
<body>

<div class="sidebar">
<h3 style="margin-left:15px">Account page</h3>
<div class="active">
<div class="collapsible-body">
  <a href="events.php">Events</a>
  <a href="notifications.php">Notifications</a>
  <a href="attendence.php">Attendence</a>
  <a href="time table.php">Time tables</a>
  <a href="https://www.nitandhra.ac.in/main/academic/NIT-AP_Rules_Modified.pdf">Rules/Regulations</a>
  <a href="https://nitandhra.ac.in/main/B.Tech/2017-18/CSE_Syllabus.pdf">Schemes & Syllabus</a>
  <a href="journal.php">Journals/Publications</a>
  <a href="study_materials.php">Study Materials</a>
  <a href="assignments.php">Assignments</a>
  
   <a href="index.php">Log out</a>
  </div>
</div>
</div>


</body>
</html>

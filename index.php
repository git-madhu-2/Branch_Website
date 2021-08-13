<?php
include("header.php");
?>
<?php
include("menu.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-left:550px;
  margin-top:25px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="slideshow2.png" style="width:50%;height:50%">
  
</div>

<div class="mySlides fade">
  <img src="slideshow3.png" style="width:50%;height:50%">
  
</div>

<div class="mySlides fade">
  <img src="slideshow4.png" style="width:50%;height:50%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<p style="margin-left:175px;margin-right:145px;margin-top:40px; font-size:18px">Among all the other streams of Engineering, Computer Science is one of the trending subjects among the 12th board exam takers. Reason? Of course it’s the job prospect globally. However; this is not an intelligent idea to pursue CSE just because others are pursuing it.
</p>
 <p style="margin-left:175px;margin-right:145px; font-size:18px">CSE comprises of the basic knowledge of computer programming and networking. The computer science experience will give ample knowledge about the implementation design and management of the entire information system in both the aspects- hardware as well as software.
</p>
<p style="margin-left:175px;margin-right:145px; font-size:18px; margin-top:2px">As the name suggests, this is a study which encompasses the theory of computation and the design and implementation of the computational systems. This is a course which is offered all over the globe in the best of the technical institutions and a student can do graduation as well as post-graduation degrees.

As part of the programme, students get to learn about developing hardware as well as software systems for the computers and they also gain ample knowledge over the communication systems and other similar devices. This is also one of the reasons why computer science graduates are best suited for robotics research.
</p>
<p style="margin-left:175px;margin-right:145px; font-size:18px">The people are responsible for designing, developing, and testing computer hardware, including computer systems, circuit boards, computer chips, keyboards, routers, and printers. They supervise the manufacturing, production, and installation of the parts.
</p>
<p style="margin-left:175px;margin-right:145px; font-size:18px">Major advantages of CSE are : Computer Science Graduates Earn Higher Salaries Computer Science Majors Have More Job Prospects Computer Science Grads Join a Fast Growing Industry Computer Science Degree Holders Work in a Wide Range of IndustriesComputer Science Grads can Help Make the World a Better Place </p>

</body>
</html> 
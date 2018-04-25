<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
		body {
		background-color: #fff;
		margin: 0px; 
		padding: 0px;		
font-family: system-ui, sans-serif;
font-size: 16px;
	}
pre{
font-family: system-ui, sans-serif;
font-size: 16px;
color : #4c4c4c;
}

tt{
	font-size: 8px;
}
.imagesize {
    width: 100%;
    height: auto;
}
.smalltext{
	font-family: system-ui, sans-serif;
	font-size: 9px;
}
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
html {
 font-family: system-ui, sans-serif;
}
 
.header {
  color: #000;
 
}

.menu a {
	color: #000;
	text-decoration: none;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 1px;
    margin-bottom: 1px;
    background-color: #fff;
    color: #fff;
    box-shadow: 0 1px 2px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover a:hover{
    color: #ff7f00;
}
.aside {
    background-color: #fff;
    padding: 16px;
    color: #000;
    text-align: center;
    font-size: 14px;
    
}
.footer {
    background-color: #ff7f00;
    font-size: 18px;
    font-style: bold;
  color: #fff;
}
.bttn {
  background-color: #ff7f00;
    border: none;
    color: #fff;
    padding: 2px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 2px 1px;
    cursor: pointer;
    
}

.bttn:hover{
	background-color:#7c7c7c;
	 color: #fdf6e3;
}

.bttn1 {border-radius: 2px;}
.bttn2 {border-radius: 4px;}
.bttn3 {border-radius: 8px;}
.bttn4 {border-radius: 12px;}
.bttn5 {border-radius: 50%;}

.outline{
 border-style: solid;
    border-width: 1px;
    border-radius: 5px;
            font-size:14px;
               padding: 3px;
               border-color:#ccc;
}

.imgfloatleft {
	float: left;
}

/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}

@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px)  { 
	.col-p-1 {width: 8.33%;}
    .col-p-2 {width: 16.66%;}
    .col-p-3 {width: 25%;}
    .col-p-4 {width: 33.33%;}
    .col-p-5 {width: 41.66%;}
    .col-p-6 {width: 50%;}
    .col-p-7 {width: 58.33%;}
    .col-p-8 {width: 66.66%;}
    .col-p-9 {width: 75%;}
    .col-p-10 {width: 83.33%;}
    .col-p-11 {width: 91.66%;}
    .col-p-12 {width: 100%;}
	}



@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-m-1 {width: 8.33%;}
    .col-m-2 {width: 16.66%;}
    .col-m-3 {width: 25%;}
    .col-m-4 {width: 33.33%;}
    .col-m-5 {width: 41.66%;}
    .col-m-6 {width: 50%;}
    .col-m-7 {width: 58.33%;}
    .col-m-8 {width: 66.66%;}
    .col-m-9 {width: 75%;}
    .col-m-10 {width: 83.33%;}
    .col-m-11 {width: 91.66%;}
    .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}
</style>
</head>
<body>
<div class="header">
  <img src = "img/wamc-logo-monarchs2.png" height = "70px">
  <?php  echo "Today is " . date("m/d/Y"); ?>
</div>
<div class="row">
<div class="col-7 col-m-5">

 <?php // ****************************************************

if (isset($_GET['v'])) {
	$get = $_GET['v']; // Default page
	} else {
		$get = -1;
	}
	
if ($get == -1) {
	   require "intro.html";
}
if ($get == 0) {
	   require "intro.html";
}
if ($get== 1) {
 require "about.html";
}

if ($get== 2) {
 require "contact.html";
}

if ($get== 3) {
 require "registration.html";
}

if ($get== 4) {
 require "locations.html";
}

if ($get== 5) {
 require "teachers.html";
}

if ($get== 6) {
 require "cte-funding.html";
}

if ($get== 7) {
 require "frameworks.html";
}

if ($get== 9) {
 require "curriculum.html";
}

if ($get== 10) {
 require "ccss-math.html";
}

if ($get== 11) {
 require "ospi-stem.html";
}
?>

</div>

<div class="col-3 col-m-3 menu">
  <ul>
    <li><a href="index.php?v=0">Home</a></li>
	<li><a href="index.php?v=1" >About Us</a></li>
	<li><a href="index.php?v=2" >Contact</a></li>
	<li><a href="index.php?v=3">Registrations</a></li>
	<li><a href="index.php?v=4">Inservice Locations</a></li>
	<li><a href="index.php?v=5">Teachers</a></li>
	<li><a href="index.php?v=6" >CTE Funding</a></li>
	<li><a href="index.php?v=7">Frameworks</a></li>
	<li><a href="index.php?v=9">Curriculum</a></li>
	<li><a href="index.php?v=10">CCSS - MATH</a></li>
	<li><a href="http://www.k12.wa.us/stem/default.aspx" target = "_blank">OSPI-STEM <tt>OPENS IN A NEW WINDOW </tt></a></li>
	<li><a href="files/" target = "_blank" >Resources/Labs <tt>OPENS IN A NEW WINDOW </tt></a></li>
	<img src = "photos/thumb-monarch-milkweed-KyleStrauss.jpg" height= "250px"> 
	<img src = "photos/thumb-monarch-caterpillear-KyleStrauss.jpg" height= "250px"><br />
Photos by Kyle Strauss 
</div>
</div>
<div class="footer">
		<center>	<br />
		Washingon Applied Math Council  - Established 1994 
	<br/><br/>
		Please contact Ron Noble (State Coordinator) with questions - Rnoble@wa-appliedmath.org
	<br/><br />
	</center>
</div>

</body>
</html>

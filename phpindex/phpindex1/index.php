<html>
<head>
<title> NAME OF YOUR SITE</title>

	<link rel="stylesheet" type="text/css" href="../css/custom.css">

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

#list{
	 position: absolute;
    left: 200px;
    top: 0px;
	
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



<?php
	error_reporting(0);
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<li><a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a></li>';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
  <img src = "ADD A GRAPHIC .png" height = "70px">
  <?php  echo "Today is " . date("m/d/Y"); ?>
</div>
<header><span style="color:#ff7f00; background-color:#fff";>ADD TEXT NOW </span></header>

<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>

</center>
</footer>

</body>
</head>

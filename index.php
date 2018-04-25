<html>
<head>
<title> 13/html</title>
<link rel ="stylesheet" type "text/css" href ="css/custom.css">
</head>

<?php
	session_start();
	$_SESSION['pagename'] = "html index";
	include "db/pushhits.php";
	
	error_reporting(0);
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
		
		$l = "LC.jpeg";
		if (false === strpos((string)$file ,'.')) $l = "directory.jpeg";
		
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "css") 
        {
            $thelist .= '<img src = img/'.$l.' height = "40" width = "40"><a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
  <img src = "img/snail.png" >
  <?php  echo "Today is " . date("m/d/Y"); ?>
</div>
<header><span style="color:#ff7f00;";>STEVEN HTML</span></header>

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

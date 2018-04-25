<html>
<head>
<title> 10.183.1.30/html/img</title>
<link rel ="stylesheet" type "text/css" href ="../css/custom.css">
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
  <img src = "../img/snail.png" >
  <?php  echo "Today is " . date("m/d/Y"); ?>
</div>
<header><span style="color:#ff7f00; background-color:#fff";>CCOLEMAN html/img/</span></header>

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

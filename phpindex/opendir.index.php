<?php
	//error_reporting(0);
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<a href="'.$file.'">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>

<?php echo $thelist?>

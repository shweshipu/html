<?php
	//error_reporting(0);
	

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a><br/>';
        }
    }
    closedir($handle);
    }
?>

<?php echo $thelist?>

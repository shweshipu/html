<html>
<?php
$filename= "chat.txt";
$txtfile = fopen($filename,"r+") or die("Unable to open file!");
fwrite($txtfile,$_POST["input"]);
echo fread($txtfile);
fclose($txtfile);
?>
</html>

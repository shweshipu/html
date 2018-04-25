<html>

<?php
for ($i=0;$i<4096;$i++){
	//print all 4096 variables
	echo "<p style=background-color:#";
	if($i<16){
		echo "0";
	}
	if($i<256){
		echo "0";
	}
	echo dechex($i);
	echo ";>COLOR</p>";
}
?>

</html>

<html>

<?php
for ($i=0;$i<4096;$i++){
	//print all 4096 variables
	echo "<pre style=background-color:#";
	if($i<16){
		echo "0";
	}
	if($i<256){
		echo "0";
	}
	echo dechex($i);
	echo ";>";
	echo $i;
	echo "</pre>";
	/*if($i%16>0){
		echo "<br>";
	}*/
}
?>

</html>

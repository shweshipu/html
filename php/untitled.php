<html>
<body>
<?php
	
	
	
	
	$y=0
	recursive($y);//cant put in variables ?
	function recursive($x){
		if($x<100){
			recursive($x+1);
			echo $x;
		}
	}
	
?>
</body>
</html>

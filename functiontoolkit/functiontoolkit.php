
<html>
<header><title>function tool kit</title>
<style>
	th{
		background-color:#00007F;
		color:#FFf;
	}
	td{
		background-color:#7F0000;
		color:#fff;
	}
	body{
		background-color:#000;
	}
</style>
</header>
<body>
	<table>
		<tr>
		 <th>
		 function
		 </th>
		 <th>
			equation
		 </th>
		 <th>
			 graph
		 </th>
		</tr>
		<?php
		$name = array(//the equation names
			"constant", 
			"identity",
			"reciprocal",
			"quadratic",
			"power",
			"cubic",
			"greatest integer",
			"square root",
			"absolute value",
			"exponential",
			"logarithm",
			"trigonometric"
		);
		
		  $equation = array(//the equations
		  "y=a",
		  "y=x",
		  "y=1/x \n y=x^(-1)",
		  "y=x^2",
		  "y=x^a",
		  "y=x^3",
		  "y=[x]",
		  "y=x^(1/2)",
		  "y=|x|",
		  "y=a^x",
		  "y=ln(x) \n y=log(x)",
		  "y=sin(x) \n y=cos(x) \n y=tan(x)"
		);
		  	  
			for($i=0; $i<12;$i++){//run through 12 equations
			echo "<tr>";
			for($j=0;$j<3;$j++){//put 3 things per equation:name,the algebra,& the graph
				echo "<td>";
				if($j==0){
					echo $name[$i];
					//select an equation name form the array
				}
				else if($j==1){
					echo $equation[$i];
					//print out the corresponding equation
				}
				else if($j==2){
					if($name[$i]=="power"){
						//don't print graph if its name is power
					}
					else{
						echo "<img src=\"img/" . $name[$i] . ".png\" height=\"120\" width=\"120\">" ;
						//print out the corresponding graph
					}
				}
				echo "</td>";
			}
			echo "</tr>";
		}
		?>
		
	</table>
</body>
</html>

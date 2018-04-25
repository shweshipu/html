<html><head><title>START LINUX COMMANDS</title>
	<style>
		#menu {
			position: absolute;
			left: 50px;
			top: 0px;
		}
		#contents{
			position: absolute;
			left: 100px;
			top: 50px;
		}
	</style>

</head>
<body>
	<div id = "menu">
			<a href = "index.php?v=0"  >BASH DATE</a>&nbsp; 
			<a href = "index.php?v=1"  >MAN PS</a>&nbsp; 
			<a href = "index.php?v=2"  >PS</a>&nbsp; 
			<a href = "index.php?v=3"  >PS -A</a>&nbsp;
			<a href = "index.php?v=4"  >TIME C CODE</a>&nbsp;
			<a href = "index.php?v=5"  >PYTHON PING </a>&nbsp;
			<a href = "index.php?v=6"  >Print Working Directory</a>&nbsp;
			<a href = "index.php?v=7"  >ls -l</a>&nbsp;
			<a href = "index.php?v=8"  >IMPORTANT</a>&nbsp;

			<a href = "source/">SOURCE </a>&nbsp;
			<hr />
		</div>

		<div id = "contents">
		<pre>
			<?php
			if (isset($_GET['v'])) {
				$thepost = $_GET['v']; // Default page
				} else {
					$thepost = -1;
				}
			if (isset($_GET['num1'])) {
				$num1 = $_GET['num1']; // Default page
				} else {
					$num1 = -1;
				}
			if (isset($_GET['num2'])) {
				$num2 = $_GET['num2']; // Default page
				} else {
					$num2 = -1;
				}
				
			if ($thepost == -1) {
				$output = shell_exec('cal');
				 echo "OUTPUT";
				echo "<pre>$output</pre>";
			}
			if ($thepost == 0) {
				$output = shell_exec('date');
				 echo "OUTPUT";
				echo "<pre>$output</pre>";
			}
			if ($thepost == 1) {
				$output = shell_exec('man ps');
				 echo "OUTPUT";
				echo "<pre>$output</pre>";
			}
			if ($thepost == 2) {
				$output = shell_exec('ps');
				 echo "OUTPUT";
				echo "<pre>$output</pre>";
			}

			if ($thepost == 3) {
				$output = shell_exec('ps -a');
				 echo "OUTPUT";
				echo "<pre>$output</pre>";
			}
			if ($thepost == 4) {
					$output = shell_exec('./source/time');
				 echo "OUTPUT";
					echo "<pre>$output</pre>";
			}

			if ($thepost == 5) {
					$output = shell_exec('python3 source/pingdate.py');
				 echo "OUTPUT";
					echo "<pre>$output</pre>";
			}

			if ($thepost == 6) {
					$output = shell_exec('pwd');
				 echo "OUTPUT";
					echo "<pre>$output</pre>";
			}

			if ($thepost == 7) {
					$output = shell_exec('ls -l');
				 echo "OUTPUT";
					echo "<pre>$output</pre>";
			}

			if ($thepost == 8) {
				require "rickroll.html";
			}

			if ($thepost == 9) {
				require "add.html";
			}

			if ($thepost == 10) {
					$output = $num1 + $num2;
				 echo "OUTPUT";
					echo "<pre>$output</pre>";
			}
			?>
		</pre>
		<hr />
	</div>


</body>
</html>


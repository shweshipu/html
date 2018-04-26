<?php
   $hostname = "localhost";
   $database = "stream";
   $username = "whitehat";
   $password = "helloworld";
   
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>

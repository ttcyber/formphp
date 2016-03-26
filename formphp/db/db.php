<?php
   $host = "localhost";
   $database = "stream";
   $user = "nameOfUser";
   $pass = "password";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>

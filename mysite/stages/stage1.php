<?php
session_start();
$_SESSION['s']=1;
include '../checker.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>stage 1</title>
        <link rel = "stylesheet" href = "../style.css" />
    </head>
    <body  >
<!--The password for stage2 is 1234abcd -->
            <header class = "header" >  
			<div class="center">
				    <h1> stage1 </h1>
				    You can find the password for the next level on this page
			 </div>
			 </header>
  </body>
</html> 
	 	 	<canvas id="c"></canvas>
<script src="../letter.js"></script>

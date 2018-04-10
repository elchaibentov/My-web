<?php
session_start();
if(!isset($_SESSION['s']) )
exit();
$_SESSION['s']=3;
if($_SESSION['s']!=2) 
exit();
include '../checker.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
		<link rel = "stylesheet" href = "../style.css" />
    </head>
    <body>
        <header class = "header" >  
			<div class = "center" >
			    <h1> stage3 </h1>
				You can find the password for the next level on this page
			</div>
        </header>
		
<!--pas file exist -->
			 <section>
			  </section>
		</main>
		
	</div>
  </body>
</html> 
	 	 	<canvas id="c"></canvas>
<script src="../letter.js"></script>

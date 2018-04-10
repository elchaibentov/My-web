<?php
session_start();
if(!isset($_SESSION['s']) )
exit();
if($_SESSION['s']!=3) 
exit();
$_SESSION['s']=4;
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
			    	<h1> stage4 </h1>
				put the url of the next stage.
			</div>
        </header>
		
			 <section>
			  </section>
		</main>
		
	</div>
  </body>
</html> 
	 	 	<canvas id="c"></canvas>
<script src="../letter.js"></script>
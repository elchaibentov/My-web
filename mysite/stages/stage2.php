<?php
session_start();
if(!isset($_SESSION['s']) )
exit();
if($_SESSION['s']!=1) 
exit();
$_SESSION['s']=2;
include '../checker.php';
?>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(e)
{
  if(event.button==2)
   {
     alert(status);
     return false;  
   }
}
</script>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
		<link rel = "stylesheet" href = "../style.css" />
    </head>
    <body >
        <header class = "header" >  
			<div class = "center" >
			    <h1> stage2 </h1>
				You can find the password for the next level on this page
			</div>
        </header>
		
<!--The password for stage3 is avihu -->
			 <section>
				
			  </section>
		</main>
		
	</div>
  </body>
</html> 
	 	 	<canvas id="c"></canvas>
<script src="../letter.js"></script>

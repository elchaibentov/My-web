<?php
include_once 'checker.php';
	if(!isset($_SERVER['HTTP_REFERER'])|| $_SERVER['HTTP_REFERER']!="http://elchai.000webhostapp.com/stage6.php")
	{
	    if(isset($_SERVER['HTTP_REFERER']))
	    {
	         $refer=$_SERVER['HTTP_REFERER'];
	         echo $refer;
	    }
	    echo "you need to come from http://elchai.000webhostapp.com/stage6.php";
	   // exit();
	}
		else{
			echo "pas:yonatanHtotach";
		}
?>

	 	 	<canvas id="c"></canvas>
<script src="../letter.js"></script>

<?php
session_start();
$stage= $_SESSION['s'];
    include 'include/dbh.inc.php';
	$uid = mysqli_real_escape_string($conn , $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn , $_POST['pwd']);
		$sql= " SELECT * FROM passwords WHERE stage='$stage' ";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		$stage=$stage+1;
		if($resultCheck<1)
		{
			header("Location: ../index.php?login=user_not_exit");
			exit();
		}
		else 
		{
			if($row=mysqli_fetch_assoc($result))
			{		
				if($row['pas']==$pwd&&$row['user']==$uid)
				{
				  
	              			$_SESSION['s']++; // now you can move next level
				        header("Location: stages/stage$stage.php");
				        exit();
				}
				else{
				    $int=(int)$stage;
				    $stage--;
				    $_SESSION['s']--;
				    $site="http://elchai.000webhostapp.com/stages/stage$stage.php";
				    $message="worng password or username(username need to bo stage$int) go back";
				     echo "<SCRIPT type='text/javascript'> //not showing me this
                        alert('$message');
                         window.location.replace('$site');
                     </SCRIPT>";
				}
			}
		}
?>

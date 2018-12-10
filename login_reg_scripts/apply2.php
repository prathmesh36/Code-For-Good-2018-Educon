<?php
include '../assets/backend/connect.php';
include '../assets/backend/core.php';
include '../methods/methods.php';
@$referer1=$_SERVER['HTTP_REFERER'];
?>

<html>
<Head>
	<meta charset="UTF-8">
	<title>
		Register
	</title>
</head>
<?php

if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']))
{

	$url='../profile.php?id='.$user_id;
	echo '<script type="text/javascript">';
	echo 'window.location.href="'.$url.'";';
	echo '</script>';

}
else
{

	if(isset($_POST['iname']) && isset($_POST['typeedu']))
		{
			echo $iname=$_POST['iname'];
			echo $typeedu=$_POST['typeedu'];
						$query="UPDATE login SET institute='".$iname."',typeedu='".$typeedu."' WHERE id='".$_SESSION['user_id']."'";
						if($query_run=mysqli_query($con,$query))
						{

														 echo '<script type="text/javascript">';
							 							 echo 'window.location.href="../file_upload.php?redirect=reg"';
							 							 echo '</script>';
							 							 echo '<div id="register"><center><b style="color:red;">You Have Registered</b></center></div><br>';
						}

			}else
			{
				echo '<div id="register"><center><b style="color:red;">All Details are Mandatory</b></center></div><br>';
			}

}
?>

</html>

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

	if(
		isset($_POST['mothername']) &&
		isset($_POST['fathername']) &&
		isset($_POST['loan']) &&
		isset($_POST['contact']) &&
		isset($_POST['email2'])
		)
		{
			$mname=$_POST['mothername'];
			$fname=$_POST['fathername'];
			$loan=$_POST['loan'];
			$contact=$_POST['contact'];
			$pemail=$_POST['email2'];

			date_default_timezone_set("Asia/Kolkata");
			$time1= time();
			$date1= date( 'y-m-d h:i:s', $time1);
			if(!empty($fname) && !empty($mname) && !empty($loan) && !empty($contact) && !empty($pemail))
			{
						$query="UPDATE login SET fname='".$fname."', mname='".$mname."',contact='".$contact."',amountneed='".$loan."',pemail='".$pemail."' WHERE id='".$_SESSION['user_id']."'";
						if($query_run=mysqli_query($con,$query))
						{

							echo '<script type="text/javascript">';
							echo 'window.location.href="../Acadd.php?redirect=reg"';
							echo '</script>';
							echo '<div id="register"><center><b style="color:red;">You Have Registered</b></center></div><br>';
						}
						else
						{
							echo mysqli_error($con);
						}
			}else
			{
				echo '<div id="register"><center><b style="color:red;">All Details are Mandatory</b></center></div><br>';
			}

		}
		else
		{
			echo '<div id="register"><center><b style="color:red;">Please Fill the Details</b></center></div><br>';
		}
}
?>

</html>

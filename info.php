								<?php
						include('connection.php');
session_start();
$user=$_SESSION['email'];
												  		$get_user="SELECT * from authenticate_user where email='$user'";
												  		$query=mysqli_query($conn,$get_user);
												 		$row=mysqli_fetch_array($query);
												 		$id=$row['id'];
// mysqli_query($conn,"INSERT INTO authenticate_user (email,password,name) 
// VALUES ('email','password','name')");
// echo $id;

if(!isset($_SESSION['email']))
	{header("location: ../index.php");}
																if(isset($_POST['submit'])){
																	$fname=addslashes($_POST['fname']);
																	$lname=addslashes($_POST['lname']);
																
																	$mobile=addslashes($_POST['mobile']);
																	$occupation=addslashes($_POST['occupation']);
																	$gender=addslashes($_POST['gender']);
																	$bloodgroup=addslashes($_POST['bloodgroup']);
																	$bio=addslashes($_POST['bio']);
																	$dob=addslashes($_POST['dob']);
																	$nationality=addslashes($_POST['nationality']);
																	$address=addslashes($_POST['address']);
																	$pa=$_POST['pa'];
																	$nd=$_POST['nd'];
																	$iss=$_POST['iss'];
																	$rs=$_POST['rs'];
													$u_image=$_FILES['u_img']['name'];
													$image_tmp=$_FILES['u_img']['tmp_name'];
													move_uploaded_file($image_tmp, "image/$u_image");

														if($u_image===''){
															$update="
																	UPDATE authenticate_user
SET fname='$fname',lname='$lname',mobile='$mobile',occupation='$occupation',gender='$gender',bloodgroup='$bloodgroup',
bio='$bio',dob='$dob',nationality='$nationality',address='$address',pa='$pa',nd='$nd',iss='$iss',rs='$rs'
WHERE id='$id' ";
														}		
												else
													{					$update="
																	UPDATE authenticate_user
SET fname='$fname',lname='$lname',mobile='$mobile',occupation='$occupation',gender='$gender',bloodgroup='$bloodgroup',
bio='$bio',dob='$dob',u_image='$u_image',nationality='$nationality',address='$address',pa='$pa',nd='$nd',iss='$iss',rs='$rs'
WHERE id='$id' ";}
													
																	$run1=mysqli_query($conn,$update);
																	if($run1){
	  echo "<script>alert(' Info Updated ! '); </script>";

echo "<script>window.open('profile.php','_self')</script>";
	

																	}
																	else{
		  echo "<script>alert('Profile not Updated!'); </script>";
}
																	
																}


															?>
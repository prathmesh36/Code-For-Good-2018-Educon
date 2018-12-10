<?php
require '../assets/backend/connect.php';
require '../assets/backend/core.php';
require '../assets/backend/data.php';

$a_id=$_GET['id'];
$t_id=$_GET['tid'];
echo '<script>alert("'.$t_id.'");</script>';

$query="SELECT downvote FROM forum_answer WHERE a_id='".$a_id."' and question_id='".$t_id."'";
$query_run=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($query_run); 
$downvote=$rows['downvote'];
$downvote=$downvote+1;

$query1="UPDATE forum_answer SET downvote='".$downvote."' WHERE a_id='".$a_id."' ";
$query_run1=mysqli_query($con,$query1);

$query="SELECT downvote FROM forum_answer WHERE a_id='".$a_id."'";
$query_run=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($query_run);
echo $rows['downvote'];
?>
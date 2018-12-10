<?php
require '../assets/backend/connect.php';
require '../assets/backend/core.php';
require '../assets/backend/data.php';

$t_id=$_GET['id'];

$query="SELECT upvote FROM forum_question WHERE topic_id='".$t_id."'";
$query_run=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($query_run); 
$upvote=$rows['upvote'];
$upvote=$upvote+1;

$query1="UPDATE forum_question SET upvote='".$upvote."' WHERE topic_id='".$t_id."' ";
$query_run1=mysqli_query($con,$query1);

$query="SELECT upvote FROM forum_question WHERE topic_id='".$t_id."'";
$query_run=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($query_run);
echo $rows['upvote'];
?>
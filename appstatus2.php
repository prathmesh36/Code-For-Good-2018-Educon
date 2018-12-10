<?php
include 'assets/backend/connect.php';
include 'assets/backend/core.php';
require 'assets/backend/data.php';
$user_id=$_GET["id"];
if($_GET["type"]=="s")
{
$sql="UPDATE application SET status='2' WHERE id='".$user_id."'";
echo '<script type="text/javascript">';
echo 'window.location.href="PHP MAILER/vendor/test.php?stat=a";';
echo '</script>';
}
if($_GET["type"]=="d")
{
$sql="UPDATE application SET status='3' WHERE id='".$user_id."'";
echo '<script type="text/javascript">';
echo 'window.location.href="PHP MAILER/vendor/test.php?stat=d";';
echo '</script>';
}
$query_run=mysqli_query($con,$sql);
?>

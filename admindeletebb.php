<?php
include("dbcon.php");
$lid=$_GET["fid"];
$res=mysqli_query($con,"DELETE FROM `login` WHERE `l_id`='$lid'");
$res1=mysqli_query($con,"SELECT * FROM `b_bank` WHERE `l_id`='$lid'");
if($res==1 & $res1==1)
{
	header("location:managebb.php");
}
?>

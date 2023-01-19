<?php
include("dbcon.php");
$id=$_GET["fid"];
$res=mysqli_query($con,"DELETE FROM `stock` WHERE `sid`='$id'");
if($res)
{
	header("location:manageblood.php");
}
?>

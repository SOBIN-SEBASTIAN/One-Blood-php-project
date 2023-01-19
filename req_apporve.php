<?php
include "dbcon.php";
$rid=$_GET["did"];
$res2=mysqli_query($con,"SELECT * FROM `b_request` WHERE `rid`='$rid'" );
$ro=mysqli_fetch_array($res2);
$u=$ro["units"];
$b=$ro["bid"];
$g=$ro["b_group"];
$res=mysqli_query($con,"SELECT * FROM `stock` WHERE `bid`='$b' AND `b_group`='$g'" );
$r=mysqli_fetch_array($res);
$c=$r["stock"]-$u;
mysqli_query($con,"UPDATE `stock` SET `stock`='$c' WHERE `bid`='$b' AND `b_group`='$g'");
mysqli_query($con,"UPDATE `b_request` SET `status`='1' WHERE `rid`='$rid'");
header("location:bbankrequest.php");
?>
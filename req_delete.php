<?php
include "dbcon.php";
$rid=$_GET['did'];
$sql="DELETE FROM `b_request` WHERE `rid`=$rid";
mysqli_query($con,$sql);
header("location:your_request.php");
?>
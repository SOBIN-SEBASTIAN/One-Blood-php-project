<?php
include("dbcon.php");
$id=$_GET["fid"];
$i=mysqli_query($con,"SELECT * FROM `image` WHERE `l_id`='$id'");
              $ty=mysqli_fetch_array($i);
              $z=$ty['img_name'];
 $u=unlink("profilephotos/". $z);
 if($u)
 {
 	mysqli_query($con,"DELETE FROM `image` WHERE `l_id`='$id'");
 	mysqli_query($con,"DELETE FROM `login` WHERE `l_id`='$id'");
 	mysqli_query($con,"DELETE FROM `user` WHERE `l_id`='$id'");
 	?>
 <script type="text/javascript">
 window.location.href='displayuser.php'
 </script>

 <?php
 }
 ?>
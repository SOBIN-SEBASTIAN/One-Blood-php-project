<?php
 

$con =mysqli_connect("localhost","root","","oneblood");

 $res1=mysqli_query($con,"SELECT * FROM `login` WHERE `u_name`='sobin2022mca'");
          while($row=mysqli_fetch_array($res1))
          {
            $id=$row["l_id"];
           
          }
           echo $id;
?>